<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'food'])->latest()->get();
    $totalOrders = $orders->count();
    $totalSales = $orders->sum(fn($o) => $o->food->price);
    return view('admin.dashboard', compact('orders', 'totalOrders', 'totalSales'));
    }
}
