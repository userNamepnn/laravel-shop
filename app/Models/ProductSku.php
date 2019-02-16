<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'stock'
    ];

    /**
     * SKU-商品 1对1
     * @return mixed
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
