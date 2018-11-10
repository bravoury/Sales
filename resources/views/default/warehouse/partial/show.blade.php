            <div class="content">
                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('sales::warehouse.label.name') !!}
                </label><br />
                    {!! $warehouse['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="origin_kg_fee">
                    {!! trans('sales::warehouse.label.origin_kg_fee') !!}
                </label><br />
                    {!! $warehouse['origin_kg_fee'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="exchange_rate">
                    {!! trans('sales::warehouse.label.exchange_rate') !!}
                </label><br />
                    {!! $warehouse['exchange_rate'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('sales::warehouse.label.name'))
                       -> required()
                       -> placeholder(trans('sales::warehouse.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('origin_kg_fee')
                       -> label(trans('sales::warehouse.label.origin_kg_fee'))
                       -> placeholder(trans('sales::warehouse.placeholder.origin_kg_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('exchange_rate')
                       -> label(trans('sales::warehouse.label.exchange_rate'))
                       -> placeholder(trans('sales::warehouse.placeholder.exchange_rate'))!!}
                </div>
            </div>