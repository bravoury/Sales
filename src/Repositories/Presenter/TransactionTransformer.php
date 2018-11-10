<?php

namespace Tadascript\Sales\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class TransactionTransformer extends TransformerAbstract
{
    public function transform(\Tadascript\Sales\Models\Transaction $transaction)
    {
        return [
            'id'                => $transaction->getRouteKey(),
            'key'               => [
                'public'    => $transaction->getPublicKey(),
                'route'     => $transaction->getRouteKey(),
            ], 
            'order_id'          => $transaction->order_id,
            'debt'              => $transaction->debt,
            'note'              => $transaction->note,
            'order_fee'         => $transaction->order_fee,
            'pay_fee'           => $transaction->pay_fee,
            'code'              => $transaction->code,
            'transport_fee'     => $transaction->transport_fee,
            'url'               => [
                'public'    => trans_url('sales/'.$transaction->getPublicKey()),
                'user'      => guard_url('sales/transaction/'.$transaction->getRouteKey()),
            ], 
            'status'            => trans('app.'.$transaction->status),
            'created_at'        => format_date($transaction->created_at),
            'updated_at'        => format_date($transaction->updated_at),
        ];
    }
}