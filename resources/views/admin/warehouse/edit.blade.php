    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#warehouse" data-toggle="tab">{!! trans('sales::warehouse.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#sales-warehouse-edit'  data-load-to='#sales-warehouse-entry' data-datatable='#sales-warehouse-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#sales-warehouse-entry' data-href='{{guard_url('sales/warehouse')}}/{{$warehouse->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('sales-warehouse-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('sales/warehouse/'. $warehouse->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="warehouse">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('sales::warehouse.name') !!} [{!!$warehouse->name!!}] </div>
                @include('sales::admin.warehouse.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>