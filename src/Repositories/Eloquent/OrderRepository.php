<?php

namespace Tadascript\Sales\Repositories\Eloquent;

use Tadascript\Sales\Interfaces\OrderRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('tadascript.sales.order.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('tadascript.sales.order.model.model');
    }
}
