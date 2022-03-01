@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <h4>Home / Services</h4>
        <hr>
        <div class="container">

            <div class="row">


                <a href="{{ route('add.service') }}"><button class="btn btn-info">Add Service</button></a>

                <div class="col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-header">All Service Data</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" width="5%">SL No</th>
                                <th scope="col" width="15%">Service Title</th>
                                <th scope="col" width="25%">Service Description</th>
                                <th scope="col" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($homeservice as $service)
                                <tr>
                                    <th scope="row">{{ $service->id }}</th>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->description }}</td>

                                    <td><a href="{{ route('edit.service',$service->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('delete.service',$service->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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
@endsection
