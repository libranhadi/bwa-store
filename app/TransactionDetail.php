<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = ['transactions_id', 'products_id', 'shipping_status', 'resi', 'code'];

    protected $hidden = [];
}

