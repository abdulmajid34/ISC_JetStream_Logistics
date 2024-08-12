@extends('layouts.index')
@section('content')
<div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success" style="width: 400px" role="alert">
                <div class="d-flex flex-row justify-content-between">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            </div>
        @endif
        <h1>Customer List</h1>
        <div class="row" style="margin-top: 3rem">
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="filter_name" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="filter_name" name="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="filter_phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="filter_phone" name="phone" placeholder="phone">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="filter_address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="filter_address" name="address"
                                placeholder="address">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-3 mt-4">
                <button class="btn btn-primary">Search</button>
                <button class="btn btn-warning">Export</button>
                @can('role', ['supervisor'])
                    @if (URL::current() == route('customers'))
                        <button class="btn btn-primary">
                            <a href="" style="color: white; text-decoration: none">
                                Create
                            </a>
                        </button>
                    @endif
                @endcan
            </div>



            <div class="container" style="margin-top: 5rem">
                <div class="row">
                    <table class="table">
                        <thead class="" style="background-color: #0d6efd">
                            <tr>
                                <th scope="col" class="text-start text-white">Name</th>
                                <th scope="col" class="text-start text-white">Email</th>
                                <th scope="col" class="text-start text-white">Phone</th>
                                <th scope="col" class="text-start text-white">Address</th>
                                
                                @can('role', ['supervisor'])
                                    @if (URL::current() == route('customers'))
                                        <th scope="col" class="text-center text-white">Action</th>
                                    @endif
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customerList as $list)
                                <tr>
                                    <td class="text-start">{{ $list->name }}</td>
                                    <td class="text-start">{{ $list->email }}</td>
                                    <td class="text-start">{{ $list->phone }}</td>
                                    <td class="text-start">{{ $list->address }}</td>
                                    
                                    @can('role', ['supervisor'])
                                        @if (URL::current() == route('customers'))
                                            <td class="text-center">
                                                <button type="button" class="btn btn-warning">
                                                    <a style="text-decoration: none; color: white"
                                                        >
                                                        Edit
                                                    </a>
                                                </button>
                                                <form action="" method="post"
                                                    class="d-inline pl-2">
                                                    
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        @endif
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item "><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
@endsection
