<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCartRequest;
use App\Models\CartItem;

class CartController extends Controller
{
    public function add(AddCartRequest $request)
    {
        $user = $request->user();
        $skuId = $request->input('sku_id');
        $amount = $request->input('amount');

        //从数据库查看该商品是否已存在
        if ($cart = $user->cartItems()->where('product_sku_id', '=', $skuId)->first()) {
            //若存在,直接数量加1
            $cart->update([
                'amount' => $cart->amount + $amount,
            ]);
        } else {

            //否则创建一个新记录
            $cart = new CartItem(['amount' => $amount]);
            $cart->user()->associate($user);
            $cart->productSku()->associate($skuId);
            $cart->save();
        }

        return [];
    }
}
