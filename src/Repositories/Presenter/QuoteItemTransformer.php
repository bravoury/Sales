<?php

namespace Tadascript\Sales\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class QuoteItemTransformer extends TransformerAbstract
{
    public function transform(\Tadascript\Sales\Models\QuoteItem $quote_item)
    {
        return [
            'id'                => $quote_item->getRouteKey(),
            'key'               => [
                'public'    => $quote_item->getPublicKey(),
                'route'     => $quote_item->getRouteKey(),
            ], 
            'quote_id'          => $quote_item->quote_id,
            'name'              => $quote_item->name,
            'image'             => $quote_item->image,
            'link'              => $quote_item->link,
            'qty'               => $quote_item->qty,
            'options'           => $quote_item->options,
            'price_web'         => $quote_item->price_web,
            'comment'           => $quote_item->comment,
            'note'              => $quote_item->note,
            'total_fee'         => $quote_item->total_fee,
            'checked'           => $quote_item->checked,
            'total_web'         => $quote_item->total_web,
            'total_exchange'    => $quote_item->total_exchange,
            'url'               => [
                'public'    => trans_url('sales/'.$quote_item->getPublicKey()),
                'user'      => guard_url('sales/quote_item/'.$quote_item->getRouteKey()),
            ], 
            'status'            => trans('app.'.$quote_item->status),
            'created_at'        => format_date($quote_item->created_at),
            'updated_at'        => format_date($quote_item->updated_at),
        ];
    }
}