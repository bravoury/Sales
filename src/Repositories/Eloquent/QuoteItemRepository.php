<?php

namespace Tadascript\Sales\Repositories\Eloquent;

use Tadascript\Sales\Interfaces\QuoteItemRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class QuoteItemRepository extends BaseRepository implements QuoteItemRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('tadascript.sales.quote_item.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('tadascript.sales.quote_item.model.model');
    }
}
