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
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->sort()->unique('id');
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }
}
