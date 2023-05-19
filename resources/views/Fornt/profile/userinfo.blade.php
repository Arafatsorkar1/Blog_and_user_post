@extends('Fornt.master')
@section('title', 'Profile')

@section('body')

    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class=""><a href="#">Home</a></li>
                            <li class="mx-auto"><a href="#">User</a></li>





                            <a href="{{route('user.profile.edit', auth()->id())}}" class="btn btn-info btn-sm">Edit  Profile</a>


                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">


                            <img src="{{asset(auth()->user()->image)}}"  data-default-file="{{asset('images/default.jpg')}}" alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">


                            <h5 class="my-3">{{auth()->user()->name}}</h5>
                            <p class="text-muted mb-1">Full Stack Developer</p>

                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">

                    </div>
                </div>



                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{auth()->user()->name}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{auth()->user()->email}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" >{{auth()->user()->phone}}</p>
                                </div>

                            </div>



                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{auth()->user()->address}}</p>
                                </div>
                            </div>



                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <hr>
    <hr>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="center">Post your blog</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>

                            <form action="{{route('user.profile.store')}}" method="post" enctype="multipart/form-data">
                                @csrf



                                    <div class="form-group">
                                        <label for="exampleInputuname">Heading</label>
                                        <div class="input-group col-md-12">
                                            <span class="input-group-text" id="basic-addon1"></span>
                                            <input type="text" class="form-control" name="title" placeholder="some write" >
                                        </div>
                                    </div>


                                <div class="form-group">
                                    <label for="">Full Content</label>
                                    <div class="input-group col-md-12">
                                        <textarea class="form-control" name="content" aria-hidden="true" style="overflow: hidden; width: 100% !important; max-width: 100%" ></textarea>
                                    </div>
                                </div>





                                    <div class="form-group">
                                        <label for="pwd2">Image</label>
                                        <div class="input-group col-md-12">
                                            <span class="input-group-text" id="basic-addon4"></span>
                                            <input type="file" name="image"  id="input-file-now" class="dropify" />

                                        </div>
                                    </div>





                                <div class="align-left">
                                    <input type="submit" class="btn btn-success" value="Post" />


                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr>
    <hr>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="center">Your all post</h3>
                        </div>


                        <div class="card-body">



                            <div class="page-spacer clearfix">
                                <div id="primary" class="content-area">
                                    <div class="container py-5">
                                        <div class="row">



                                            <main id="main" class="site-main col-xs-12 col-sm-8 left-block">
                                                <hr>


                                                @foreach($blog as $item)



                                                    <div class="sl-item">


                                                        <hr>


                                                        <div class="sl-right">





                                                                <div class="m-t-20 row">

                                                                    <div class="col-md-3 col-xs-12"><img src="{{asset($item->image)}}" alt="user" class="img-responsive mt-4 " width="150px" height="110px" /></div>
                                                                    <div class="col-md-9 col-xs-12">
                                                                        <h3>{{$item->title}}</h3>
                                                                        <p class=""><span class="claimedRight" ></span>{{$item->content}} </p>

                                                                        <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('deleteFrom{{$item->id}}').submit();" class="btn btn-danger btn-sm">
                                                                            Delete
                                                                        </a>

                                                                        <form id="deleteFrom{{$item->id}}" action="{{ route('user.profile.destroy', $item->id) }}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                        </form>

{{--                                                                        <a href="{{route('details',['id'=>$blog->id])}}" class="btn btn-success text-white"> details </a></div>--}}

                                                                </div>

                                                                <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>


                                                            </div>
                                                        </div>



                                                @endforeach
                                                <hr>
                                            </main>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
