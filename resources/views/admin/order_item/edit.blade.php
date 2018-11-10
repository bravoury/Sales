    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#order_item" data-toggle="tab">{!! trans('sales::order_item.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#sales-order_item-edit'  data-load-to='#sales-order_item-entry' data-datatable='#sales-order_item-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#sales-order_item-entry' data-href='{{guard_url('sales/order_item')}}/{{$order_item->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-order_item-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('sales/order_item/'. $order_item->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="order_item">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('sales::order_item.name') !!} [{!!$order_item->name!!}] </div>
                @include('sales::admin.order_item.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>