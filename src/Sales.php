<?php

namespace Tadascript\Sales;

use User;

class Sales
{
    /**
     * $warehouse object.
     */
    protected $warehouse;

    /**
     * Constructor.
     */
    public function __construct(\Tadascript\Sales\Interfaces\WarehouseRepositoryInterface $warehouse)
    {
        $this->warehouse = $warehouse;
    }

    /**
     * Returns count of sales.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.warehouse.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->warehouse->pushCriteria(new \Litepie\Tadascript\Repositories\Criteria\WarehouseUserCriteria());
        }

        $warehouse = $this->warehouse->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('sales::' . $view, compact('warehouse'))->render();
    }
}
