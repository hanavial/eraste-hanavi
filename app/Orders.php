<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['order_code','id_product','total'];
    protected $dates = ['deleted_at'];

    use SoftDeletes;

    public function product()
    {
        //return $this->belongsTo(Alat::class);
        return $this->belongsTo('App\Product', 'id_product');
    }
}
