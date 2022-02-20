<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Category <b></b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-header">All Category</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>


                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="card-body">
                            <form action="{{ route('store.category') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input name="category_name" type="text" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">

                                        @error('category_name')
                                            <span class="text-danger"> {{$message}} </span>
                                        @enderror
                                </div>


                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</x-app-layout>
