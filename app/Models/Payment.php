<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['product_id', 'name', 'email', 'phone', 'proof'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
