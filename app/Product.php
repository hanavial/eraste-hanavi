<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['code','name','price'];
    protected $dates = ['deleted_at'];

    use SoftDeletes;

    public function orders()
    {
        return $this->hasMany('App\Orders', 'id');
    }
}
