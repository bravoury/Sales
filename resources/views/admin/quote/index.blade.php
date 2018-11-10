<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('sales::quote.name') !!} <small> {!! trans('app.manage') !!} {!! trans('sales::quote.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('sales::quote.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='sales-quote-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('sales/quote')!!}">{!! trans('sales::quote.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('sales/quote?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('sales/quote?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('sales/quote/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('sales::admin.quote.partial.actions')
                    -->
                    @include('sales::admin.quote.partial.filter')
                    @include('sales::admin.quote.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="sales-quote-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="sales-quote-check-all"></th>
                        <th data-field="shop_name">{!! trans('sales::quote.label.shop_name')!!}</th>
                    <th data-field="shop_link">{!! trans('sales::quote.label.shop_link')!!}</th>
                    <th data-field="web_type">{!! trans('sales::quote.label.web_type')!!}</th>
                    <th data-field="comment">{!! trans('sales::quote.label.comment')!!}</th>
                    <th data-field="note">{!! trans('sales::quote.label.note')!!}</th>
                    <th data-field="order_fee">{!! trans('sales::quote.label.order_fee')!!}</th>
                    <th data-field="total_fee">{!! trans('sales::quote.label.total_fee')!!}</th>
                    <th data-field="checked">{!! trans('sales::quote.label.checked')!!}</th>
                    <th data-field="customer_id">{!! trans('sales::quote.label.customer_id')!!}</th>
                    <th data-field="is_active">{!! trans('sales::quote.label.is_active')!!}</th>
                    </thead>
                </table>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">

var oTable;
var oSearch;
$(document).ready(function(){
    app.load('#sales-quote-entry', '{!!guard_url('sales/quote/0')!!}');
    oTable = $('#sales-quote-list').dataTable( {
        'columnDefs': [{
            'targets': 0,
            'searchable': false,
            'orderable': false,
            'className': 'dt-body-center',
            'render': function (data, type, full, meta){
                return '<input type="checkbox" name="id[]" value="' + data.id + '">';
            }
        }], 
        
        "responsive" : true,
        "order": [[1, 'asc']],
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! guard_url('sales/quote') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $.each(oSearch, function(key, val){
                aoData.push( { 'name' : key, 'value' : val } );
            });
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'id'},
            {data :'shop_name'},
            {data :'shop_link'},
            {data :'web_type'},
            {data :'comment'},
            {data :'note'},
            {data :'order_fee'},
            {data :'total_fee'},
            {data :'checked'},
            {data :'customer_id'},
            {data :'is_active'},
        ],
        "pageLength": 25
    });

    $('#sales-quote-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#sales-quote-list').DataTable().row( this ).data();
        $('#sales-quote-entry').load('{!!guard_url('sales/quote')!!}' + '/' + d.id);
    });

    $('#sales-quote-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#sales-quote-check-all").on( 'change', function (e) {
        e.preventDefault();
        aIds = [];
        if ($(this).prop('checked')) {
            $("input[name^='id[]']").each(function(){
                $(this).prop('checked',true);
                aIds.push($(this).val());
            });

            return;
        }else{
            $("input[name^='id[]']").prop('checked',false);
        }
        
    });


    $(".reset_filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        $('#form-search input,#form-search select').each( function () {
          oTable.search( this.value ).draw();
        });
        $('#sales-quote-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#sales-quote-list tbody').on('click', 'td.details-control', function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });

});
</script>