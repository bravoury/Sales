<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('sales::quote_item.name') !!} <small> {!! trans('app.manage') !!} {!! trans('sales::quote_item.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('sales::quote_item.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='sales-quote_item-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('sales/quote_item')!!}">{!! trans('sales::quote_item.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('sales/quote_item?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('sales/quote_item?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('sales/quote_item/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('sales::admin.quote_item.partial.actions')
                    -->
                    @include('sales::admin.quote_item.partial.filter')
                    @include('sales::admin.quote_item.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="sales-quote_item-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="sales-quote_item-check-all"></th>
                        <th data-field="name">{!! trans('sales::quote_item.label.name')!!}</th>
                    <th data-field="image">{!! trans('sales::quote_item.label.image')!!}</th>
                    <th data-field="qty">{!! trans('sales::quote_item.label.qty')!!}</th>
                    <th data-field="options">{!! trans('sales::quote_item.label.options')!!}</th>
                    <th data-field="price_web">{!! trans('sales::quote_item.label.price_web')!!}</th>
                    <th data-field="comment">{!! trans('sales::quote_item.label.comment')!!}</th>
                    <th data-field="note">{!! trans('sales::quote_item.label.note')!!}</th>
                    <th data-field="total_fee">{!! trans('sales::quote_item.label.total_fee')!!}</th>
                    <th data-field="checked">{!! trans('sales::quote_item.label.checked')!!}</th>
                    <th data-field="total_web">{!! trans('sales::quote_item.label.total_web')!!}</th>
                    <th data-field="total_exchange">{!! trans('sales::quote_item.label.total_exchange')!!}</th>
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
    app.load('#sales-quote_item-entry', '{!!guard_url('sales/quote_item/0')!!}');
    oTable = $('#sales-quote_item-list').dataTable( {
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
        "sAjaxSource": '{!! guard_url('sales/quote_item') !!}',
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
            {data :'name'},
            {data :'image'},
            {data :'qty'},
            {data :'options'},
            {data :'price_web'},
            {data :'comment'},
            {data :'note'},
            {data :'total_fee'},
            {data :'checked'},
            {data :'total_web'},
            {data :'total_exchange'},
        ],
        "pageLength": 25
    });

    $('#sales-quote_item-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#sales-quote_item-list').DataTable().row( this ).data();
        $('#sales-quote_item-entry').load('{!!guard_url('sales/quote_item')!!}' + '/' + d.id);
    });

    $('#sales-quote_item-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#sales-quote_item-check-all").on( 'change', function (e) {
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
        $('#sales-quote_item-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#sales-quote_item-list tbody').on('click', 'td.details-control', function (e) {
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