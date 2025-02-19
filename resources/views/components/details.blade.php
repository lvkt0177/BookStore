@extends('layout.template')
@section('subtitle',$product->title)

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5">
            <div class="product-image">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}">
            </div>
        </div>
        <div class="col-md-7">
            <div class="product-container">
                <h2 class="product-title">{{ $product->title }}</h2>
                <p class="product-author">Author: <strong>{{ $product->author }}</strong></p>
                <p class="product-price">$ {{ number_format($product->price, 0, ',', '.') }}</p>
                <p class="product-category">Category: <strong>{{ $product->category->name }}</strong></p>
                <a href="#" class="buy-btn">Buy now</a>
            </div>
        </div>
    </div>
</div>

@endsection
