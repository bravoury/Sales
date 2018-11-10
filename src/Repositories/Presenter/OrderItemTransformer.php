<?php

namespace Tadascript\Sales\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class OrderItemTransformer extends TransformerAbstract
{
    public function transform(\Tadascript\Sales\Models\OrderItem $order_item)
    {
        return [
            'id'                => $order_item->getRouteKey(),
            'key'               => [
                'public'    => $order_item->getPublicKey(),
                'route'     => $order_item->getRouteKey(),
            ], 
            'order_id'          => $order_item->order_id,
            'name'              => $order_item->name,
            'image'             => $order_item->image,
            'link'              => $order_item->link,
            'note'              => $order_item->note,
            'comment'           => $order_item->comment,
            'qty'               => $order_item->qty,
            'price_web'         => $order_item->price_web,
            'total_web'         => $order_item->total_web,
            'total_exchange'    => $order_item->total_exchange,
            'ship_in_china'     => $order_item->ship_in_china,
            'options'           => $order_item->options,
            'url'               => [
                'public'    => trans_url('sales/'.$order_item->getPublicKey()),
                'user'      => guard_url('sales/order_item/'.$order_item->getRouteKey()),
            ], 
            'status'            => trans('app.'.$order_item->status),
            'created_at'        => format_date($order_item->created_at),
            'updated_at'        => format_date($order_item->updated_at),
        ];
    }
}