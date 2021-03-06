<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plates_trashed = Auth::user()->plates()->onlyTrashed()->get();
        $plates = Auth::user()->plates()->get();
        $orders = Auth::user()->plates()->with('orders')->get()->pluck('orders')->flatten()->unique('id')->pluck('id')->toArray();
        return view('admin.summary', compact('plates', 'orders', 'plates_trashed'));
    }
}
