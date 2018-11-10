            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('avatar')
                       -> label(trans('sales::order.label.avatar'))
                       -> placeholder(trans('sales::order.placeholder.avatar'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('average_cash')
                       -> label(trans('sales::order.label.average_cash'))
                       -> placeholder(trans('sales::order.placeholder.average_cash'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('bales_charge')
                       -> label(trans('sales::order.label.bales_charge'))
                       -> placeholder(trans('sales::order.placeholder.bales_charge'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('customer_id')
                       -> label(trans('sales::order.label.customer_id'))
                       -> required()
                       -> placeholder(trans('sales::order.placeholder.customer_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('deposit_money')
                       -> label(trans('sales::order.label.deposit_money'))
                       -> placeholder(trans('sales::order.placeholder.deposit_money'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('exchange_rate')
                       -> label(trans('sales::order.label.exchange_rate'))
                       -> placeholder(trans('sales::order.placeholder.exchange_rate'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('fee_tally')
                       -> label(trans('sales::order.label.fee_tally'))
                       -> placeholder(trans('sales::order.placeholder.fee_tally'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::hidden('is_pay')
                   -> forceValue('0')!!}
                   {!! Form::checkbox('is_pay')
                   -> label(trans('sales::order.label.is_pay'))
                   -> addClass('js-switch')!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('notes')
                       -> label(trans('sales::order.label.notes'))
                       -> placeholder(trans('sales::order.placeholder.notes'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('order_code')
                       -> label(trans('sales::order.label.order_code'))
                       -> placeholder(trans('sales::order.placeholder.order_code'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('shop_fee')
                       -> label(trans('sales::order.label.shop_fee'))
                       -> placeholder(trans('sales::order.placeholder.shop_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('order_id')
                       -> label(trans('sales::order.label.order_id'))
                       -> placeholder(trans('sales::order.placeholder.order_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('internal_status')
                    -> fromQuery(\Tadascript\Sales\Models\Order::all(), 'name', 'id')
                    -> label(trans('sales::order.label.internal_status'))
                    -> required()
                    -> placeholder(trans('sales::order.placeholder.internal_status'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='created_shop_dt' class='control-label'>{!!trans('sales::order.label.created_shop_dt')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('created_shop_dt')
                        -> placeholder(trans('sales::order.placeholder.created_shop_dt'))
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('kg_fee')
                       -> label(trans('sales::order.label.kg_fee'))
                       -> placeholder(trans('sales::order.placeholder.kg_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('quote_dt')
                       -> label(trans('sales::order.label.quote_dt'))
                       -> placeholder(trans('sales::order.placeholder.quote_dt'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('weight')
                       -> label(trans('sales::order.label.weight'))
                       -> placeholder(trans('sales::order.placeholder.weight'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('success_dt')
                       -> label(trans('sales::order.label.success_dt'))
                       -> placeholder(trans('sales::order.placeholder.success_dt'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('ordering_dt')
                       -> label(trans('sales::order.label.ordering_dt'))
                       -> placeholder(trans('sales::order.placeholder.ordering_dt'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('transpost_fee')
                       -> label(trans('sales::order.label.transpost_fee'))
                       -> placeholder(trans('sales::order.placeholder.transpost_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('total_fee')
                       -> label(trans('sales::order.label.total_fee'))
                       -> placeholder(trans('sales::order.placeholder.total_fee'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('total_fee_te')
                       -> label(trans('sales::order.label.total_fee_te'))
                       -> placeholder(trans('sales::order.placeholder.total_fee_te'))!!}
                </div>
            </div>