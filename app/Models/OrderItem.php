<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public $fillable = ['amount', 'price', 'rating', 'review', 'reviewed_at'];

    protected $dates = ['reviewed_at'];

    public $timestamps = false;

    /**
     * 订单商品-商品 一对一关系
     * @return mixed
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * 订单商品-商品sku 一对一关系
     * @return mixed
     */
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }

    /**
     * 订单商品-订单 一对一关系
     * @return mixed
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
