<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('sales::order_item.name') !!} <small> {!! trans('app.manage') !!} {!! trans('sales::order_item.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('sales::order_item.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='sales-order_item-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('sales/order_item')!!}">{!! trans('sales::order_item.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('sales/order_item?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('sales/order_item?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('sales/order_item/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('sales::admin.order_item.partial.actions')
                    -->
                    @include('sales::admin.order_item.partial.filter')
                    @include('sales::admin.order_item.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="sales-order_item-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="sales-order_item-check-all"></th>
                        <th data-field="order_id">{!! trans('sales::order_item.label.order_id')!!}</th>
                    <th data-field="name">{!! trans('sales::order_item.label.name')!!}</th>
                    <th data-field="image">{!! trans('sales::order_item.label.image')!!}</th>
                    <th data-field="link">{!! trans('sales::order_item.label.link')!!}</th>
                    <th data-field="note">{!! trans('sales::order_item.label.note')!!}</th>
                    <th data-field="comment">{!! trans('sales::order_item.label.comment')!!}</th>
                    <th data-field="qty">{!! trans('sales::order_item.label.qty')!!}</th>
                    <th data-field="price_web">{!! trans('sales::order_item.label.price_web')!!}</th>
                    <th data-field="total_web">{!! trans('sales::order_item.label.total_web')!!}</th>
                    <th data-field="total_exchange">{!! trans('sales::order_item.label.total_exchange')!!}</th>
                    <th data-field="ship_in_china">{!! trans('sales::order_item.label.ship_in_china')!!}</th>
                    <th data-field="options">{!! trans('sales::order_item.label.options')!!}</th>
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
    app.load('#sales-order_item-entry', '{!!guard_url('sales/order_item/0')!!}');
    oTable = $('#sales-order_item-list').dataTable( {
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
        "sAjaxSource": '{!! guard_url('sales/order_item') !!}',
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
            {data :'order_id'},
            {data :'name'},
            {data :'image'},
            {data :'link'},
            {data :'note'},
            {data :'comment'},
            {data :'qty'},
            {data :'price_web'},
            {data :'total_web'},
            {data :'total_exchange'},
            {data :'ship_in_china'},
            {data :'options'},
        ],
        "pageLength": 25
    });

    $('#sales-order_item-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#sales-order_item-list').DataTable().row( this ).data();
        $('#sales-order_item-entry').load('{!!guard_url('sales/order_item')!!}' + '/' + d.id);
    });

    $('#sales-order_item-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#sales-order_item-check-all").on( 'change', function (e) {
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
        $('#sales-order_item-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#sales-order_item-list tbody').on('click', 'td.details-control', function (e) {
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