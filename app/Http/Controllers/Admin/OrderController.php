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
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->sort()->unique('id');
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->unique('id')->pluck('id')->toArray();
        if (in_array($order->id, $orders)) return view('admin.orders.show', compact('order'));
        else abort(404);
    }
}
