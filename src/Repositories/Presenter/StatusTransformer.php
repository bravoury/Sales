<?php

namespace Tadascript\Sales\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class StatusTransformer extends TransformerAbstract
{
    public function transform(\Tadascript\Sales\Models\Status $status)
    {
        return [
            'id'                => $status->getRouteKey(),
            'key'               => [
                'public'    => $status->getPublicKey(),
                'route'     => $status->getRouteKey(),
            ], 
            'type'              => $status->type,
            'name'              => $status->name,
            'desc'              => $status->desc,
            'order'             => $status->order,
            'url'               => [
                'public'    => trans_url('sales/'.$status->getPublicKey()),
                'user'      => guard_url('sales/status/'.$status->getRouteKey()),
            ], 
            'status'            => trans('app.'.$status->status),
            'created_at'        => format_date($status->created_at),
            'updated_at'        => format_date($status->updated_at),
        ];
    }
}