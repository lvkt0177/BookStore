@extends('layout.template')

@section('subtitle','Cart')
    
@section('content')
    <div class="container mt-5">
        @if ($cart)
            <a href="/cart/clearCart" class="fw-bold fs-4">Clear All</a>
        
            <div class="row">
                <div class="col-md-8">
                    @foreach($cart as $id => $item)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-item d-flex align-items-center p-3 mb-3 border rounded bg-white">
                                    <img src="{{ asset('images/' . $item['image']) }}" alt="" class="rounded" width="80">
                                    <div class="ms-3 flex-grow-1">
                                        <h4 class="mb-1 fw-bolder">{{ $item['title'] }}</h4>
                                        <p class="text-danger fw-bold">Price: ${{$item['price']}} </p>
                                        <p class="text-danger fw-bold">Quantity: {{$item['quantity']}}</p>
                                    </div>
                                    <a href="/cart/remove/{{$item['id']}}" class="btn btn-sm btn-danger">Remove</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                            
                <div class="col-md-4">
                    <div class="p-3 border rounded bg-white">
                        <h5 class="mb-3">Total: <span class="text-danger fw-bold"> $ {{$total}} </span></h5>
                        <button class="btn btn-success w-100">Pay now</button>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center">
                <p class="fs-4">Cart is empty</p>
            </div>
        @endif
        
    </div>
 
@endsection