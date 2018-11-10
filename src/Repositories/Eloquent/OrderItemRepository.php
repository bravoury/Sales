<?php

namespace Tadascript\Sales\Repositories\Eloquent;

use Tadascript\Sales\Interfaces\OrderItemRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class OrderItemRepository extends BaseRepository implements OrderItemRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('tadascript.sales.order_item.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('tadascript.sales.order_item.model.model');
    }
}
