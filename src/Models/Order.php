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
class Order extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, Revision, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'tadascript.sales.order.model';


    /**
     * The status that belong to the order.
     */
    public function status(){
        return $this->hasOne('Sales\Order\Models\Status');
    }


    /**
     * The internalStatus that belong to the order.
     */
    public function internalStatus(){
        return $this->hasOne('Sales\Order\Models\Status');
    }


    /**
     * The quote that belong to the order.
     */
    public function quote(){
        return $this->hasOne('Sales\Order\Models\Quote');
    }
}
