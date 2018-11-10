    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('sales::order_item.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#sales-order_item-entry' data-href='{{guard_url('sales/order_item/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($order_item->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#sales-order_item-entry' data-href='{{ guard_url('sales/order_item') }}/{{$order_item->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#sales-order_item-entry' data-datatable='#sales-order_item-list' data-href='{{ guard_url('sales/order_item') }}/{{$order_item->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-order_item-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('sales/order_item'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('sales::order_item.name') !!}  [{!! $order_item->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('sales::admin.order_item.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>