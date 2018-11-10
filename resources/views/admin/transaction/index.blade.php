<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-text-o"></i> {!! trans('sales::transaction.name') !!} <small> {!! trans('app.manage') !!} {!! trans('sales::transaction.names') !!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! guard_url('/') !!}"><i class="fa fa-dashboard"></i> {!! trans('app.home') !!} </a></li>
            <li class="active">{!! trans('sales::transaction.names') !!}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div id='sales-transaction-entry'>
    </div>
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                    <li class="{!!(request('status') == '')?'active':'';!!}"><a href="{!!guard_url('sales/transaction')!!}">{!! trans('sales::transaction.names') !!}</a></li>
                    <li class="{!!(request('status') == 'archive')?'active':'';!!}"><a href="{!!guard_url('sales/transaction?status=archive')!!}">Archived</a></li>
                    <li class="{!!(request('status') == 'deleted')?'active':'';!!}"><a href="{!!guard_url('sales/transaction?status=deleted')!!}">Trashed</a></li>
                    <li class="pull-right">
                    <span class="actions">
                    <!--   
                    <a  class="btn btn-xs btn-purple"  href="{!!guard_url('sales/transaction/reports')!!}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-sm hidden-xs"> Reports</span></a>
                    @include('sales::admin.transaction.partial.actions')
                    -->
                    @include('sales::admin.transaction.partial.filter')
                    @include('sales::admin.transaction.partial.column')
                    </span> 
                </li>
            </ul>
            <div class="tab-content">
                <table id="sales-transaction-list" class="table table-striped data-table">
                    <thead class="list_head">
                        <th style="text-align: right;" width="1%"><a class="btn-reset-filter" href="#Reset" style="display:none; color:#fff;"><i class="fa fa-filter"></i></a> <input type="checkbox" id="sales-transaction-check-all"></th>
                        <th data-field="order_id">{!! trans('sales::transaction.label.order_id')!!}</th>
                    <th data-field="debt">{!! trans('sales::transaction.label.debt')!!}</th>
                    <th data-field="note">{!! trans('sales::transaction.label.note')!!}</th>
                    <th data-field="order_fee">{!! trans('sales::transaction.label.order_fee')!!}</th>
                    <th data-field="pay_fee">{!! trans('sales::transaction.label.pay_fee')!!}</th>
                    <th data-field="code">{!! trans('sales::transaction.label.code')!!}</th>
                    <th data-field="transport_fee">{!! trans('sales::transaction.label.transport_fee')!!}</th>
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
    app.load('#sales-transaction-entry', '{!!guard_url('sales/transaction/0')!!}');
    oTable = $('#sales-transaction-list').dataTable( {
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
        "sAjaxSource": '{!! guard_url('sales/transaction') !!}',
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
            {data :'debt'},
            {data :'note'},
            {data :'order_fee'},
            {data :'pay_fee'},
            {data :'code'},
            {data :'transport_fee'},
        ],
        "pageLength": 25
    });

    $('#sales-transaction-list tbody').on( 'click', 'tr td:not(:first-child)', function (e) {
        e.preventDefault();

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var d = $('#sales-transaction-list').DataTable().row( this ).data();
        $('#sales-transaction-entry').load('{!!guard_url('sales/transaction')!!}' + '/' + d.id);
    });

    $('#sales-transaction-list tbody').on( 'change', "input[name^='id[]']", function (e) {
        e.preventDefault();

        aIds = [];
        $(".child").remove();
        $(this).parent().parent().removeClass('parent'); 
        $("input[name^='id[]']:checked").each(function(){
            aIds.push($(this).val());
        });
    });

    $("#sales-transaction-check-all").on( 'change', function (e) {
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
        $('#sales-transaction-list .reset_filter').css('display', 'none');

    });


    // Add event listener for opening and closing details
    $('#sales-transaction-list tbody').on('click', 'td.details-control', function (e) {
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