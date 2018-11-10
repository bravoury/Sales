    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#order" data-toggle="tab">{!! trans('sales::order.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#sales-order-edit'  data-load-to='#sales-order-entry' data-datatable='#sales-order-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#sales-order-entry' data-href='{{guard_url('sales/order')}}/{{$order->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-order-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('sales/order/'. $order->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="order">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('sales::order.name') !!} [{!!$order->name!!}] </div>
                @include('sales::admin.order.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>