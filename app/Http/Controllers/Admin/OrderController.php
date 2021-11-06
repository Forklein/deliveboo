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
        $plates = Plate::where('user_id', Auth::id())->get();
        return view('admin.orders.index', compact('plates'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }
}
