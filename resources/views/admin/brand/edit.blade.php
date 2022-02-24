@extends('admin.admin_master')

@section('admin')



    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="py-12">
        <div class="container">
            <div class="row">


                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Brand</div>
                        <div class="card-body">
                            <form action="{{ url('brand/update/'.$brands->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Update Brand Name</label>
                                    <input name="brand_name" type="text" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{$brands->brand_name}}">

                                    @error('brand_name')
                                    <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Update Brand Image</label>
                                    <input name="brand_image" type="file" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" value="{{$brands->brand_image}}">

                                    @error('brand_image')
                                    <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <img src="{{ asset($brands->brand_image) }}" style="width:400px; height: 200px;" alt="">
                                </div>


                                <button type="submit" class="btn btn-primary">Update Brand</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
