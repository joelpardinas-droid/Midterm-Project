<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function placeOrder(Request $request, $id)
    {
        $food = Food::find($id);

        if (!$food) {
            return back()->with('error', 'Food not found.');
        }

        $quantity = $request->quantity ?? 1;
        $total = $food->price * $quantity;

        $order = new Order();
        $order->user_id = Auth::id();
        $order->food_id = $food->id;
        $order->quantity = $quantity;
        $order->total_price = $total;
        $order->status = 'pending';
        $order->save();

        return back()->with('success', 'Order placed successfully!');
    }
}
