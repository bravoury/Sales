            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('order_id')
                       -> label(trans('sales::order_item.label.order_id'))
                       -> required()
                       -> placeholder(trans('sales::order_item.placeholder.order_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('sales::order_item.label.name'))
                       -> placeholder(trans('sales::order_item.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('image')
                       -> label(trans('sales::order_item.label.image'))
                       -> placeholder(trans('sales::order_item.placeholder.image'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('link')
                       -> label(trans('sales::order_item.label.link'))
                       -> placeholder(trans('sales::order_item.placeholder.link'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('note')
                       -> label(trans('sales::order_item.label.note'))
                       -> placeholder(trans('sales::order_item.placeholder.note'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('comment')
                       -> label(trans('sales::order_item.label.comment'))
                       -> placeholder(trans('sales::order_item.placeholder.comment'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('qty')
                       -> label(trans('sales::order_item.label.qty'))
                       -> placeholder(trans('sales::order_item.placeholder.qty'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('price_web')
                       -> label(trans('sales::order_item.label.price_web'))
                       -> placeholder(trans('sales::order_item.placeholder.price_web'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('total_web')
                       -> label(trans('sales::order_item.label.total_web'))
                       -> placeholder(trans('sales::order_item.placeholder.total_web'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('total_exchange')
                       -> label(trans('sales::order_item.label.total_exchange'))
                       -> placeholder(trans('sales::order_item.placeholder.total_exchange'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ship_in_china')
                       -> label(trans('sales::order_item.label.ship_in_china'))
                       -> placeholder(trans('sales::order_item.placeholder.ship_in_china'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('options')
                       -> label(trans('sales::order_item.label.options'))
                       -> placeholder(trans('sales::order_item.placeholder.options'))!!}
                </div>
            </div>