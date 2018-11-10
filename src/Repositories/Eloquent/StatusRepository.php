<?php

namespace Tadascript\Sales\Repositories\Eloquent;

use Tadascript\Sales\Interfaces\StatusRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class StatusRepository extends BaseRepository implements StatusRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('tadascript.sales.status.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('tadascript.sales.status.model.model');
    }
}
