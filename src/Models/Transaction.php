<?php

namespace Tadascript\Sales\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Revision\Traits\Revision;
use Litepie\Trans\Traits\Translatable;
class Transaction extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, Revision, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'tadascript.sales.transaction.model';


    /**
     * The order that belong to the transaction.
     */
    public function order(){
        return $this->hasOne('Sales\Transaction\Models\Order');
    }
}
