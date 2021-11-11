<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Plate;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->sortDesc()->unique('id');
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->unique('id')->pluck('id')->toArray();
        if (in_array($order->id, $orders)) {
            $plates = Auth::user()->plates()->onlyTrashed()->with('orders')->get()->pluck('orders')->flatten()->toArray();
            if (in_array($order->id, $plates)) {
                return view('admin.orders.show', compact('order', 'plates'));
            } else return view('admin.orders.show', compact('order'));
        } else abort(404);
    }
}
