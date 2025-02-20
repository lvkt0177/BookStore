@extends('layout.template')
@section('subtitle','Wishlist')
@section('content')
    
    <div class="container mt-5">


        @if ($wishlist)
            <div class="text-center my-2">
                <h3 class="fw-bolder">WISHLIST</h3>
            </div>
            <a href="/wishlist/clear" class="fw-bold fs-4">Clear All</a>

            <div class="row">
                <div class="col-md-12">
                    @foreach($wishlist as $id => $item)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-item d-flex align-items-center p-3 mb-3 border rounded bg-white">
                                    <img src="{{ asset('images/' . $item['image']) }}" alt="" class="rounded" width="80">
                                    <div class="ms-3 flex-grow-1">
                                        <a href="/{{$item['id']}}" class="mb-1 fw-bolder fs-4">{{ $item['title'] }}</a>
                                        <p class="text-danger fw-bold">Price: ${{ number_format($item['price'],'0',',','.') }} </p>
                                        <a class="fs-4 text-danger" href="/addToCart/{{$item['id']}}"><i class="bi bi-cart-plus"></i> Add To Cart</a>
                                    </div>
                                    <a href="/wishlist/remove/{{$item['id']}}" class="btn btn-sm btn-danger">Remove</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                            
                
            </div>
        @else
            <div class="text-center">
                <p class="fs-4">Wishlist is Empty</p>
            </div>
        @endif


    </div>
@endsection