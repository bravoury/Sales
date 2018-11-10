<div class="btn-group sales-order">
    <button class="btn btn-xs btn-danger btn-search" type="button">
        <i aria-hidden="true" class="fa fa-search">
        </i>
        <span class="hidden-sm hidden-xs"> Search</span>
    </button>
    <button aria-expanded="false" class="btn btn-xs btn-danger dropdown-toggle" data-toggle="dropdown" type="button">
        <span class="caret">
        </span>
        <span class="sr-only">
            Toggle Dropdown
        </span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a class="btn-search" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-filter">
                </i>
                Show filters
            </a>
        </li>
        <li>
            <a class="btn-reset-filter" style="cursor:pointer;">
                <i class="fa fa-fw fa-ban text-danger">
                </i>
                Clear filters
            </a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a class="btn-save" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-floppy-o">
                </i>
                Save search
            </a>
        </li>
        <li>
            <a class="btn-open" style="cursor:pointer;">
                <i aria-hidden="true" class="fa fa-fw fa-folder-open-o">
                </i>
                Saved searches
            </a>
        </li>
    </ul>
</div>

<div class="modal fade" id="modal-search">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #dd4b39; color: #fff;">
              <button type="button" class="close" data-dismiss="modal" aaria-hidden="true">&times;</button>
              <h4 class="modal-title">Search</h4>
            </div>
              {!!Form::horizontal_open()
              ->id('form-search')
              ->method('POST')
              ->action(guard_url('settings/settings'))!!}
                <div class="modal-body has-form clearfix">
                    <div class="modal-form">
<div class="container-fluid">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[avatar]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.avatar')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[avatar]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[average_cash]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.average_cash')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[average_cash]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[bales_charge]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.bales_charge')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[bales_charge]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[customer_id]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.customer_id')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[customer_id]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[deposit_money]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.deposit_money')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[deposit_money]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[exchange_rate]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.exchange_rate')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[exchange_rate]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[fee_tally]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.fee_tally')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[fee_tally]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[is_pay]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.is_pay')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[is_pay]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[notes]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.notes')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[notes]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[order_code]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.order_code')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[order_code]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[shop_fee]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.shop_fee')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[shop_fee]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[order_id]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.order_id')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[order_id]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[internal_status]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.internal_status')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[internal_status]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[created_shop_dt]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.created_shop_dt')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[created_shop_dt]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[kg_fee]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.kg_fee')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[kg_fee]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[quote_dt]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.quote_dt')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[quote_dt]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[weight]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.weight')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[weight]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[success_dt]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.success_dt')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[success_dt]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[ordering_dt]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.ordering_dt')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[ordering_dt]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[transpost_fee]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.transpost_fee')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[transpost_fee]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[total_fee]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.total_fee')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[total_fee]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     
                                    <label for="search[total_fee_te]" class="col-sm-2 control-label">
                                        {!! trans('sales::order.label.total_fee_te')!!}
                                    </label>
                                    <div class="col-sm-10">
                                        {!! Form::text('search[total_fee_te]')->raw()!!}
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 col-lg-12">
                        <button aria-label="Close" class="btn pull-right btn-danger" data-dismiss="modal" type="button">
                            <i class="fa fa-times-circle">
                            </i>
                            Close
                        </button>
                        <button class="btn btn-success pull-right " id="btn-apply-search" name="new" style="margin-right:1%" type="button">
                            <i class="fa fa-check-circle">
                            </i>
                            Search
                        </button>
                    </div>
                </div>
              {!!Form::close()!!}
        </div>
    </div>
</div>


<div class="modal fade" id="modal-open">
  <div class="modal-dialog">
    <div class="modal-content" style="max-width:400px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Saved</h4>
      </div>
      <div class="modal-body" style="height:210px; overflow-y: auto;">
        
        <div id="saved-list">
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"  name="Closerep" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close </button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
$(document).ready(function(){

    $(".sales-order .btn-open").click(function(){
        toastr.info('This feature will be enabled soon.', 'Coming soon');
        return false;
        $('#open-list').load("{!!guard_url('/settings/setting/search/sales.order.search')!!}");
        $('#modal-open').modal("show");
    });

   $(".sales-order .btn-search").click(function(){
      $('#modal-search').modal("show");
    });
   
    $('.sales-order .btn-save').click(function(e){
        toastr.info('This feature will be enabled soon.', 'Coming soon');
        return false;
        var search = prompt("Please enter name for your search");
        if (search == null) {
            toastr.error('Please enter valid name.', 'Error');
            return false;
        }
        var formData = new FormData();
        formData.append('value', $("#form-search").serialize());
        formData.append('name', search);
        formData.append('key', 'sales.order.search');
        formData.append('package', 'Page');
        formData.append('module', 'Page');

        $.ajax({
            url : "{!!guard_url('/settings/setting')!!}",
            type: "POST",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success:function(data, textStatus, jqXHR)
            {
                toastr.success('Search saved successfully.', 'Success');
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                toastr.error('An error occurred while saving.', 'Error');
            }
        });

        e.preventDefault();
    });

    $('#btn-apply-search').click( function() {
        oSearch = {};
        $('#form-search input,#form-search select').each( function () {
          key = $(this).attr('name');
          val = $(this).val();
          oSearch[key] = val;
        });
        oTable.api().draw();
        $('#sales-order-list .btn-reset-filter').css('display', '');
        $('#modal-search').modal("hide");
        
      });
    
    $(".btn-reset-filter").click(function (e) {
        e.preventDefault();
        $("#form-search")[ 0 ].reset();
        oSearch = {};
        $('#form-search input,#form-search select').each( function () {
          key = $(this).attr('name');
          val = $(this).val();
          oSearch[key] = val;
        });
        oTable.api().draw();
        $('#sales-order-list .btn-reset-filter').css('display', 'none');

    });

});
</script>