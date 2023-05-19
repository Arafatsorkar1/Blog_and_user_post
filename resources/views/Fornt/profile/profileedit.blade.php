@extends('Fornt.master')

@section('title', 'Profile_edit')



@section('body')

    <section class="py-5">
        <div class="container">


            <div class="row mt-4 mx-auto">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Edit your profile </h4>

                            <hr>

                            <form class="form p-t-20" action="{{route('user.profile.update', $info->id)}}" method="POST" enctype="multipart/form-data">

                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputuname">Phone</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"></span>
                                        <input type="number" class="form-control" name="phone" placeholder="Phone Number" value="{{$info->phone ?? ''}}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="pwd2">Image</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon4"></span>
                                        <input type="file" name="image" data-default-file="{{ $info->image ? asset($info->image) : asset('images/default.jpg') }}" id="input-file-now" class="dropify" />

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Full Address</label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="address" aria-hidden="true" style="overflow: hidden; width: 100% !important; max-width: 100%" >{{$info->address}}</textarea>
                                    </div>
                                </div>









                                <div class="mt-5">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 text-white">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </section>




@endsection
