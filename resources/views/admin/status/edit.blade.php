    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#status" data-toggle="tab">{!! trans('sales::status.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#sales-status-edit'  data-load-to='#sales-status-entry' data-datatable='#sales-status-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#sales-status-entry' data-href='{{guard_url('sales/status')}}/{{$status->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-status-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('sales/status/'. $status->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="status">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('sales::status.name') !!} [{!!$status->name!!}] </div>
                @include('sales::admin.status.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>