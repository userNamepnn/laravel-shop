<?php

namespace App\Http\Controllers;

use App\Exceptions\InternalException;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\UserAddress;
use App\Services\CartService;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * 保存订单
     * @param OrderRequest $request
     * @return mixed
     */
    public function store(OrderRequest $request, CartService $cartService)
    {
        $address = UserAddress::find($request->input('address_id'));
        $order = $this->orderService->store($request->user(), $address, $request->input('remark'), $request->input('items'));

        return $order;
    }

    /**
     * 订单列表页
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $orders = Order::query()
            ->with(['items.product', 'items.productSku'])
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('orders.index', compact('orders'));
    }

    /**
     * 订单详情
     * @param Order $order
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Order $order, Request $request)
    {
        $this->authorize('own', $order);
        return view('orders.show', ['order' => $order->load(['items.productSku', 'items.product'])]);
    }

    /**
     * 确认收货
     * @param Order $order
     * @param Request $request
     * @return Order
     * @throws InternalException
     */
    public function received(Order $order, Request $request)
    {
        //校验权限
        $this->authorize('own', $order);

        //判断订单发货状态是否正确
        if ($order->ship_status !== Order::SHIP_STATUS_DELIVERED) {
            throw new InternalException('物流状态有误');
        }

        //更新物流状态
        $order->update([
            'ship_status' => Order::SHIP_STATUS_RECEIVED,
        ]);

        //返回原页面
        return $order;
    }
}
