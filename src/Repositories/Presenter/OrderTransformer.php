<?php

namespace Tadascript\Sales\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class OrderTransformer extends TransformerAbstract
{
    public function transform(\Tadascript\Sales\Models\Order $order)
    {
        return [
            'id'                => $order->getRouteKey(),
            'key'               => [
                'public'    => $order->getPublicKey(),
                'route'     => $order->getRouteKey(),
            ], 
            'avatar'            => $order->avatar,
            'average_cash'      => $order->average_cash,
            'bales_charge'      => $order->bales_charge,
            'customer_id'       => $order->customer_id,
            'deposit_money'     => $order->deposit_money,
            'exchange_rate'     => $order->exchange_rate,
            'fee_tally'         => $order->fee_tally,
            'is_pay'            => $order->is_pay,
            'notes'             => $order->notes,
            'order_code'        => $order->order_code,
            'shop_fee'          => $order->shop_fee,
            'order_id'          => $order->order_id,
            'status'            => $order->status,
            'internal_status'   => $order->internal_status,
            'created_shop_dt'   => $order->created_shop_dt,
            'kg_fee'            => $order->kg_fee,
            'quote_dt'          => $order->quote_dt,
            'weight'            => $order->weight,
            'success_dt'        => $order->success_dt,
            'ordering_dt'       => $order->ordering_dt,
            'transpost_fee'     => $order->transpost_fee,
            'total_fee'         => $order->total_fee,
            'total_fee_te'      => $order->total_fee_te,
            'quote_id'          => $order->quote_id,
            'url'               => [
                'public'    => trans_url('sales/'.$order->getPublicKey()),
                'user'      => guard_url('sales/order/'.$order->getRouteKey()),
            ], 
            'status'            => trans('app.'.$order->status),
            'created_at'        => format_date($order->created_at),
            'updated_at'        => format_date($order->updated_at),
        ];
    }
}