<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    protected $table = 'configpoints';

    protected $fillable = ['id', 'totalpoints', 'amountSum', 'amountEntrega'];
}
