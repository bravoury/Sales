            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('type')
                       -> label(trans('sales::status.label.type'))
                       -> placeholder(trans('sales::status.placeholder.type'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('sales::status.label.name'))
                       -> placeholder(trans('sales::status.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('desc')
                       -> label(trans('sales::status.label.desc'))
                       -> placeholder(trans('sales::status.placeholder.desc'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('order')
                       -> label(trans('sales::status.label.order'))
                       -> placeholder(trans('sales::status.placeholder.order'))!!}
                </div>
            </div>