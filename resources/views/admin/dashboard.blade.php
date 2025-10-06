@extends('layouts.app')

@section('content')
<div class="dashboard">
    <h1>Admin Dashboard</h1>

    <div class="stats">
        <div class="stat-card">
            <h2>Total Orders</h2>
            <p>{{ $totalOrders }}</p>
        </div>
        <div class="stat-card">
            <h2>Total Sales</h2>
            <p>₱{{ number_format($totalSales, 2) }}</p>
        </div>
    </div>

    <h2>Recent Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Food</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->food->name }}</td>
                    <td>₱{{ $order->food->price }}</td>
                    <td>{{ $order->created_at->format('M d, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
