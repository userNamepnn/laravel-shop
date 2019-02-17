<?php

namespace App\Listeners;

use App\Events\OrderPaid;
use App\Models\OrderItem;

class UpdateProductSoldCount
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderPaid $event
     * @return void
     */
    public function handle(OrderPaid $event)
    {
        // 从事件对象中取出对应的订单
        $order = $event->getOrder();
        // 预加载商品数据
        $order->load('items.product');
        // 循环遍历商品
        foreach ($order->items as $item) {
            $product = $item->product;
            $soldCount = OrderItem::query()
                ->where('product_id', $product->id)
                ->whereHas('order', function ($query) {
                    $query->whereNotNull('paid_at'); //关联的订单已是支付状态
                })->sum('amount');
            // 更新商品销量
            $product->update([
                'sold_count' => $soldCount,
            ]);
        }
    }
}
