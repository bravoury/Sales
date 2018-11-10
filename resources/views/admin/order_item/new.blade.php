<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('sales::order_item.names') !!} [{!! trans('sales::order_item.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#sales-order_item-entry' data-href='{!!guard_url('sales/order_item/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>