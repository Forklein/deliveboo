<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FinanceController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->unique('id');
        $total = array_sum($orders->pluck('total')->toArray());

        $months = $orders->sortBy('created_at')->groupBy(function($item) {
            return Carbon::parse($item->created_at)->format('M');
        });

        $monthly_orders = [];
        foreach ($months as $key => $value){
            $monthly_orders += [$key => count($value)];
        };

        $monthly_income = [];
        foreach ($months as $key => $value){
            $tot = 0;
            foreach($value as $order) {
                $tot += $order->total;
            };
            $monthly_income += [$key => $tot];
        };

        return view('admin.finances.index', compact('orders', 'total', 'monthly_orders', 'monthly_income'));
    }

}
