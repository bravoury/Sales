    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('sales::quote.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#sales-quote-entry' data-href='{{guard_url('sales/quote/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($quote->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#sales-quote-entry' data-href='{{ guard_url('sales/quote') }}/{{$quote->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#sales-quote-entry' data-datatable='#sales-quote-list' data-href='{{ guard_url('sales/quote') }}/{{$quote->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-quote-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('sales/quote'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('sales::quote.name') !!}  [{!! $quote->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('sales::admin.quote.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>