@extends('back.Dashboard.master')

@section('title' , 'Product')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Manage Products</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Cat.name</th>
                                    <th>Brand Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    {{--                                    <th>Status</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>


                                        {{--                                        <td>{{$product->category_id}}</td>--}}
                                        <td>{{$product->category->name}}</td>


                                        <td>{{$product->brand_name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                            <img src="{{asset($product->image)}}" style="height: 80px" alt=""
                                        </td>

                                        {{--                                        <td>{{$product->status==1?'published' : 'Unpublished'}}</td>--}}
                                        <td>
                                            <a href="" class="btn btn-success">Edit</a>
                                            <a href="{{route('products.destroy', $product->id)}}" onclick="return confirm('Are you Sure  ?')" class="btn btn-success">Delete</a>
                                        </td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
