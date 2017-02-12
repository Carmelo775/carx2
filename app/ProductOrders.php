<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrders extends Model
{
    protected $table = 'productsorders';

    protected $fillable = ['idPedido', 'title', 'quantity', 'price'];
}
