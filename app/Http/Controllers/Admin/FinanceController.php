<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->unique('id');
        $total = array_sum($orders->pluck('total')->toArray());
        return view('admin.finances.index', compact('orders', 'total'));
    }
}
