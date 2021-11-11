<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->plates()->with('orders')->withTrashed()->get()->pluck('orders')->flatten()->sortDesc()->unique('id');
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order_ids = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->unique('id')->pluck('id')->toArray();
        $plates = $order->plates()->withTrashed()->get();
        if (in_array($order->id, $order_ids)) return view('admin.orders.show', compact('order', 'plates'));
        else abort(404);
    }
}
