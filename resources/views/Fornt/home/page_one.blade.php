@extends('Fornt.master')
@section('title','page')

@section('body')

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">{{ $category->name ?? ''}}</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">{{ $category->name ?? ''}}</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5"> Of Tranings</h1>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <a href="">
                            <span class="card">
                                <img style="width: 100%;height: 220px;" src="{{asset($product->image)}}" alt="">
                                <div class="card-body">
                                    <h3></h3>
                                    <p>{{$product->name}}</p>
                                    <small>{!! Str::limit($product->description,125) !!}</small>
                                </div>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
