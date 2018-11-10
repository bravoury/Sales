@forelse($quote_item as $key => $val)
<div class="quote_item-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="quote_item-gadget-box">
    <p>No QuoteItem</p>
</div>
@endif