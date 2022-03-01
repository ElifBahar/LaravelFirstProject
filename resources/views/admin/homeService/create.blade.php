@extends('admin.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Home Page/Services - Create</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Service Title :</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Service Description :</label>
                        <textarea name="short_des" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
