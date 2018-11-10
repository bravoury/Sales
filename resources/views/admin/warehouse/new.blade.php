<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('sales::warehouse.names') !!} [{!! trans('sales::warehouse.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#sales-warehouse-entry' data-href='{!!guard_url('sales/warehouse/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>