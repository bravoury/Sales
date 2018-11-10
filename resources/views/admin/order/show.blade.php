    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('sales::order.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#sales-order-entry' data-href='{{guard_url('sales/order/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($order->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#sales-order-entry' data-href='{{ guard_url('sales/order') }}/{{$order->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#sales-order-entry' data-datatable='#sales-order-list' data-href='{{ guard_url('sales/order') }}/{{$order->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-order-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('sales/order'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('sales::order.name') !!}  [{!! $order->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('sales::admin.order.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>