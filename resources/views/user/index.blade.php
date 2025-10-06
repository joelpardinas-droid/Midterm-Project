@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff8f0;
        font-family: Arial, sans-serif;
    }

    .hero {
        text-align: center;
        padding: 40px 20px;
        background: #d40000;
        color: white;
        border-radius: 0 0 20px 20px;
        margin-bottom: 40px;
    }

    .hero h1 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .hero p {
        font-size: 18px;
        opacity: 0.9;
    }

    /* Grid layout for foods */
    .food-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 35px;
        padding: 30px 50px;
        justify-items: center;
    }

    
    .food-card {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        width: 240px;
        text-align: center;
        padding: 15px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .food-card:hover {
        transform: scale(1.03);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .food-card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .food-card h3 {
        font-size: 16px;
        font-weight: bold;
        color: #222;
        margin: 10px 0 5px;
    }

    .food-card p {
        color: #555;
        font-weight: bold;
        margin-bottom: 12px;
    }

   
    .food-card button {
        background: #d40000;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 25px;
        padding: 10px 25px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .food-card button:hover {
        background: #b80000;
    }
</style>

<div class="hero">
    <h1>Welcome to Food Ordering!</h1>
    <p>Craving something delicious? Order your favorite meal now.</p>
</div>

<div class="food-container">
    @foreach($foods as $food)
        <div class="food-card">
            <img src="{{ asset('images/' . $food->image) }}" alt="{{ $food->name }}">
            <h3>{{ $food->name }}</h3>
            <p>₱{{ number_format($food->price, 2) }}</p>

            <form action="{{ route('order.store', ['id' => $food->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="food_id" value="{{ $food->id }}">
                <button type="submit">Order Now</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
