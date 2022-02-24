@extends('admin.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit Home About</h2>
            </div>
            <div class="card-body">
                <form action="{{ url('update/homeabout/'.$homeabout->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">About Title :</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" value="{{$homeabout->title}}">
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About Short Description :</label>
                        <textarea name="short_des" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$homeabout->short_des}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About Long Description :</label>
                        <textarea name="long_des" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$homeabout->long_des}}</textarea>
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
