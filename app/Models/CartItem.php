<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['amount'];

    public $timestamps = false;

    /**
     * 购物车商品-用户 关联关系
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 购物车商品-库存商品 关联关系
     * @return mixed
     */
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}
