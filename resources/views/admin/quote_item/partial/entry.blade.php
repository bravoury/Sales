            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('sales::quote_item.label.name'))
                       -> required()
                       -> placeholder(trans('sales::quote_item.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('image')
                       -> label(trans('sales::quote_item.label.image'))
                       -> required()
                       -> placeholder(trans('sales::quote_item.placeholder.image'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('qty')
                       -> label(trans('sales::quote_item.label.qty'))
                       -> required()
                       -> placeholder(trans('sales::quote_item.placeholder.qty'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('options')
                       -> label(trans('sales::quote_item.label.options'))
                       -> placeholder(trans('sales::quote_item.placeholder.options'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('price_web')
                       -> label(trans('sales::quote_item.label.price_web'))
                       -> placeholder(trans('sales::quote_item.placeholder.price_web'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('comment')
                       -> label(trans('sales::quote_item.label.comment'))
                       -> placeholder(trans('sales::quote_item.placeholder.comment'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('note')
                       -> label(trans('sales::quote_item.label.note'))
                       -> placeholder(trans('sales::quote_item.placeholder.note'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('total_fee')
                       -> label(trans('sales::quote_item.label.total_fee'))
                       -> placeholder(trans('sales::quote_item.placeholder.total_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::hidden('checked')
                   -> forceValue('0')!!}
                   {!! Form::checkbox('checked')
                   -> label(trans('sales::quote_item.label.checked'))
                   -> addClass('js-switch')!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('total_web')
                       -> label(trans('sales::quote_item.label.total_web'))
                       -> placeholder(trans('sales::quote_item.placeholder.total_web'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('total_exchange')
                       -> label(trans('sales::quote_item.label.total_exchange'))
                       -> placeholder(trans('sales::quote_item.placeholder.total_exchange'))!!}
                </div>
            </div>