    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#transaction" data-toggle="tab">{!! trans('sales::transaction.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#sales-transaction-edit'  data-load-to='#sales-transaction-entry' data-datatable='#sales-transaction-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#sales-transaction-entry' data-href='{{guard_url('sales/transaction')}}/{{$transaction->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-transaction-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('sales/transaction/'. $transaction->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="transaction">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('sales::transaction.name') !!} [{!!$transaction->name!!}] </div>
                @include('sales::admin.transaction.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>