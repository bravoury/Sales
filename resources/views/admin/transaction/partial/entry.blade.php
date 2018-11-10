            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('order_id')
                       -> label(trans('sales::transaction.label.order_id'))
                       -> required()
                       -> placeholder(trans('sales::transaction.placeholder.order_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('debt')
                       -> label(trans('sales::transaction.label.debt'))
                       -> placeholder(trans('sales::transaction.placeholder.debt'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('note')
                       -> label(trans('sales::transaction.label.note'))
                       -> placeholder(trans('sales::transaction.placeholder.note'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('order_fee')
                       -> label(trans('sales::transaction.label.order_fee'))
                       -> placeholder(trans('sales::transaction.placeholder.order_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('pay_fee')
                       -> label(trans('sales::transaction.label.pay_fee'))
                       -> placeholder(trans('sales::transaction.placeholder.pay_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('code')
                       -> label(trans('sales::transaction.label.code'))
                       -> placeholder(trans('sales::transaction.placeholder.code'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('transport_fee')
                       -> label(trans('sales::transaction.label.transport_fee'))
                       -> placeholder(trans('sales::transaction.placeholder.transport_fee'))!!}
                </div>
            </div>