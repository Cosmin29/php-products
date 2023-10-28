@extends('products.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Show Details</h3>
    </div>

    <div class="card-body">
        <h5 class="card-title">Product Name: {{ $product->name }}</h5>
        <p class="card-text">Category: {{ $product->category->name }}</p>
        <ul>
            @foreach ($product->orders as $order)
            <li>{{ $order->name }}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="pull-right">
    <a class="btn-grad" href="{{ route('products.index') }}">Back to products</a>
</div>

    
@endsection