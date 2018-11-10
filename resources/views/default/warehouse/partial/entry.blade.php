            <div class='row'>
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