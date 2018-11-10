            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('shop_name')
                       -> label(trans('sales::quote.label.shop_name'))
                       -> placeholder(trans('sales::quote.placeholder.shop_name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('shop_link')
                       -> label(trans('sales::quote.label.shop_link'))
                       -> placeholder(trans('sales::quote.placeholder.shop_link'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('web_type')
                       -> label(trans('sales::quote.label.web_type'))
                       -> placeholder(trans('sales::quote.placeholder.web_type'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('comment')
                       -> label(trans('sales::quote.label.comment'))
                       -> placeholder(trans('sales::quote.placeholder.comment'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('note')
                       -> label(trans('sales::quote.label.note'))
                       -> placeholder(trans('sales::quote.placeholder.note'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('order_fee')
                       -> label(trans('sales::quote.label.order_fee'))
                       -> placeholder(trans('sales::quote.placeholder.order_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('total_fee')
                       -> label(trans('sales::quote.label.total_fee'))
                       -> placeholder(trans('sales::quote.placeholder.total_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::hidden('checked')
                   -> forceValue('0')!!}
                   {!! Form::checkbox('checked')
                   -> label(trans('sales::quote.label.checked'))
                   -> addClass('js-switch')!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('customer_id')
                       -> label(trans('sales::quote.label.customer_id'))
                       -> required()
                       -> placeholder(trans('sales::quote.placeholder.customer_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::hidden('is_active')
                   -> forceValue('0')!!}
                   {!! Form::checkbox('is_active')
                   -> label(trans('sales::quote.label.is_active'))
                   -> addClass('js-switch')!!}
                </div>
            </div>