<?php

namespace Tadascript\Sales\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class QuoteTransformer extends TransformerAbstract
{
    public function transform(\Tadascript\Sales\Models\Quote $quote)
    {
        return [
            'id'                => $quote->getRouteKey(),
            'key'               => [
                'public'    => $quote->getPublicKey(),
                'route'     => $quote->getRouteKey(),
            ], 
            'shop_name'         => $quote->shop_name,
            'shop_link'         => $quote->shop_link,
            'web_type'          => $quote->web_type,
            'comment'           => $quote->comment,
            'note'              => $quote->note,
            'order_fee'         => $quote->order_fee,
            'total_fee'         => $quote->total_fee,
            'checked'           => $quote->checked,
            'customer_id'       => $quote->customer_id,
            'is_active'         => $quote->is_active,
            'url'               => [
                'public'    => trans_url('sales/'.$quote->getPublicKey()),
                'user'      => guard_url('sales/quote/'.$quote->getRouteKey()),
            ], 
            'status'            => trans('app.'.$quote->status),
            'created_at'        => format_date($quote->created_at),
            'updated_at'        => format_date($quote->updated_at),
        ];
    }
}