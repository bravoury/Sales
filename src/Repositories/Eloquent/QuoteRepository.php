<?php

namespace Tadascript\Sales\Repositories\Eloquent;

use Tadascript\Sales\Interfaces\QuoteRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class QuoteRepository extends BaseRepository implements QuoteRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('tadascript.sales.quote.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('tadascript.sales.quote.model.model');
    }
}
