<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products() {
        return $this->hasMany('App\OrderDetail', 'order_id', 'id')->get();
    }
}
