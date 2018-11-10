    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#quote" data-toggle="tab">{!! trans('sales::quote.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#sales-quote-edit'  data-load-to='#sales-quote-entry' data-datatable='#sales-quote-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#sales-quote-entry' data-href='{{guard_url('sales/quote')}}/{{$quote->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-quote-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('sales/quote/'. $quote->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="quote">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('sales::quote.name') !!} [{!!$quote->name!!}] </div>
                @include('sales::admin.quote.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>