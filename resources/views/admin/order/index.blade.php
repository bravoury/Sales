<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('sales::order.name') !!} <small> {!! trans('app.manage') !!} {!! trans('sales::order.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('sales::order.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='sales-order-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('sales/order')!!}">{!! trans('sales::order.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('sales/order?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('sales/order?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('sales/order/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('sales::admin.order.partial.actions')
                    -->
                    @include('sales::admin.order.partial.filter')
                    @include('sales::admin.order.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="sales-order-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="sales-order-check-all"></th>
                        <th data-field="avatar">{!! trans('sales::order.label.avatar')!!}</th>
                    <th data-field="average_cash">{!! trans('sales::order.label.average_cash')!!}</th>
                    <th data-field="bales_charge">{!! trans('sales::order.label.bales_charge')!!}</th>
                    <th data-field="customer_id">{!! trans('sales::order.label.customer_id')!!}</th>
                    <th data-field="deposit_money">{!! trans('sales::order.label.deposit_money')!!}</th>
                    <th data-field="exchange_rate">{!! trans('sales::order.label.exchange_rate')!!}</th>
                    <th data-field="fee_tally">{!! trans('sales::order.label.fee_tally')!!}</th>
                    <th data-field="is_pay">{!! trans('sales::order.label.is_pay')!!}</th>
                    <th data-field="notes">{!! trans('sales::order.label.notes')!!}</th>
                    <th data-field="order_code">{!! trans('sales::order.label.order_code')!!}</th>
                    <th data-field="shop_fee">{!! trans('sales::order.label.shop_fee')!!}</th>
                    <th data-field="order_id">{!! trans('sales::order.label.order_id')!!}</th>
                    <th data-field="internal_status">{!! trans('sales::order.label.internal_status')!!}</th>
                    <th data-field="created_shop_dt">{!! trans('sales::order.label.created_shop_dt')!!}</th>
                    <th data-field="kg_fee">{!! trans('sales::order.label.kg_fee')!!}</th>
                    <th data-field="quote_dt">{!! trans('sales::order.label.quote_dt')!!}</th>
                    <th data-field="weight">{!! trans('sales::order.label.weight')!!}</th>
                    <th data-field="success_dt">{!! trans('sales::order.label.success_dt')!!}</th>
                    <th data-field="ordering_dt">{!! trans('sales::order.label.ordering_dt')!!}</th>
                    <th data-field="transpost_fee">{!! trans('sales::order.label.transpost_fee')!!}</th>
                    <th data-field="total_fee">{!! trans('sales::order.label.total_fee')!!}</th>
                    <th data-field="total_fee_te">{!! trans('sales::order.label.total_fee_te')!!}</th>
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
    app.load('#sales-order-entry', '{!!guard_url('sales/order/0')!!}');
    oTable = $('#sales-order-list').dataTable( {
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
        "sAjaxSource": '{!! guard_url('sales/order') !!}',
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
            {data :'avatar'},
            {data :'average_cash'},
            {data :'bales_charge'},
            {data :'customer_id'},
            {data :'deposit_money'},
            {data :'exchange_rate'},
            {data :'fee_tally'},
            {data :'is_pay'},
            {data :'notes'},
            {data :'order_code'},
            {data :'shop_fee'},
            {data :'order_id'},
            {data :'internal_status'},
            {data :'created_shop_dt'},
            {data :'kg_fee'},
            {data :'quote_dt'},
            {data :'weight'},
            {data :'success_dt'},
            {data :'ordering_dt'},
            {data :'transpost_fee'},
            {data :'total_fee'},
            {data :'total_fee_te'},
        ],
        "pageLength": 25
    });

    $('#sales-order-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#sales-order-list').DataTable().row( this ).data();
        $('#sales-order-entry').load('{!!guard_url('sales/order')!!}' + '/' + d.id);
    });

    $('#sales-order-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#sales-order-check-all").on( 'change', function (e) {
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
        $('#sales-order-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#sales-order-list tbody').on('click', 'td.details-control', function (e) {
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