<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Brand <b></b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">


                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Brand</div>
                        <div class="card-body">
                            <form action="{{ url('brand/update/'.$brands->id) }}" method="POST">
                                @csrf
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
</x-app-layout>
