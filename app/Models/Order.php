<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;

    protected $table = 'orders';

    public function products() {
        return $this->belongsToMany('App\Models\Product', 'product_order')->withPivot('quantity');
    }
}
