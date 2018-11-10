    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#quote_item" data-toggle="tab">{!! trans('sales::quote_item.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#sales-quote_item-edit'  data-load-to='#sales-quote_item-entry' data-datatable='#sales-quote_item-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#sales-quote_item-entry' data-href='{{guard_url('sales/quote_item')}}/{{$quote_item->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-quote_item-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('sales/quote_item/'. $quote_item->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="quote_item">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('sales::quote_item.name') !!} [{!!$quote_item->name!!}] </div>
                @include('sales::admin.quote_item.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>