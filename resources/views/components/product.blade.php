@extends('layout.template')

@section('subtitle','Product')

    
@section('content')
    <div class="container my-5">
        <div class="row">
            @foreach ($products as $item)

                <div class="product col-md-3 my-2">
                    <div class="card position-relative p-4 border rounded-3">
                    <img src="{{asset('images/'.$item->image)}}" class="shadow-sm" alt="product item" style="height:360px">
                    <h6 class="mt-4 mb-0 fw-bold"><a href="/{{$item->id}}">{{$item->title}}</a></h6>
                    <div class="review-content">
                        <p class="my-2 me-2 text-black-50" style="font-size: 13px">{{$item->author}}</p>
                        
                        {{-- Rating --}}
                        <div class="rating text-warning d-flex align-items-center">
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        <svg class="star star-fill">
                            <use xlink:href="#star-fill"></use>
                        </svg>
                        </div>
                    </div>
                    <span class="price text-primary fw-bold mb-2 fs-3 mt-4">${{$item->price}}</span>
                    <div class="card-concern position-absolute start-0 end-0 d-flex gap-2" style="margin-bottom: 4rem;">
                        <a  href="/addToCart/{{$item->id}}" class="btn btn-dark">
                            <svg class="cart">
                                <use xlink:href="#cart"></use>
                            </svg>
                        </a>

                        <a href="#" class="btn btn-dark">
                        <span>
                            <svg class="wishlist">
                            <use xlink:href="#heart"></use>
                            </svg>
                        </span>
                        </a>
                    </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection