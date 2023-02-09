<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Order;
class OrderController extends Controller
{
    public function ALlOrder()
    {
        $orders=Order::all();
        return view('admin.order.index',compact('orders'));
    }

    public function OrderView($id)
    {
        $order=Order::find($id);
        return view('admin.order.order_view',compact('order'));
        // return response()->json($order);
    }
}
