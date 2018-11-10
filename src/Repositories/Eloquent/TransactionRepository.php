<?php

namespace Tadascript\Sales\Repositories\Eloquent;

use Tadascript\Sales\Interfaces\TransactionRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TransactionRepository extends BaseRepository implements TransactionRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('tadascript.sales.transaction.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('tadascript.sales.transaction.model.model');
    }
}
