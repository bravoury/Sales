<?php

namespace Tadascript\Sales\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class QuotePresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new QuoteTransformer();
    }
}