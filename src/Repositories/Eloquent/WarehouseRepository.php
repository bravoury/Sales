<?php

namespace Tadascript\Sales\Repositories\Eloquent;

use Tadascript\Sales\Interfaces\WarehouseRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class WarehouseRepository extends BaseRepository implements WarehouseRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('tadascript.sales.warehouse.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('tadascript.sales.warehouse.model.model');
    }
}
