<?php

namespace Tadascript\Sales\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class WarehouseTransformer extends TransformerAbstract
{
    public function transform(\Tadascript\Sales\Models\Warehouse $warehouse)
    {
        return [
            'id'                => $warehouse->getRouteKey(),
            'key'               => [
                'public'    => $warehouse->getPublicKey(),
                'route'     => $warehouse->getRouteKey(),
            ], 
            'name'              => $warehouse->name,
            'origin_kg_fee'     => $warehouse->origin_kg_fee,
            'exchange_rate'     => $warehouse->exchange_rate,
            'url'               => [
                'public'    => trans_url('sales/'.$warehouse->getPublicKey()),
                'user'      => guard_url('sales/warehouse/'.$warehouse->getRouteKey()),
            ], 
            'status'            => trans('app.'.$warehouse->status),
            'created_at'        => format_date($warehouse->created_at),
            'updated_at'        => format_date($warehouse->updated_at),
        ];
    }
}