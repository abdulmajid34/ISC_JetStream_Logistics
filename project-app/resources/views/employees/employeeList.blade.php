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
        <h1>Employee List</h1>
        <div class="row" style="margin-top: 3rem">
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="filter_name" class="form-label">Employee Name</label>
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
                            <label for="filter_position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="filter_position" name="position"
                                placeholder="position">
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="filter_hiredate" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" id="filter_hiredate" name="hire_date"
                                placeholder="*month">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-4">
                <button class="btn btn-primary">Search</button>
                <button class="btn btn-warning">Export</button>
                @can('role', ['supervisor'])
                    @if (URL::current() == route('employees'))
                        <button class="btn btn-success">
                            <a href="{{ route('createForm') }}" style="color: white; text-decoration: none">
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
                                <th scope="col" class="text-start text-white">Position</th>
                                <th scope="col" class="text-start text-white">Hire Date</th>
                                @can('role', ['supervisor'])
                                    @if (URL::current() == route('employees'))
                                        <th scope="col" class="text-center text-white">Action</th>
                                    @endif
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employeeList as $list)
                                <tr>
                                    <td class="text-start">{{ $list->name }}</td>
                                    <td class="text-start">{{ $list->email }}</td>
                                    <td class="text-start">{{ $list->phone }}</td>
                                    <td class="text-start">{{ $list->position }}</td>
                                    <td class="text-start">{{ $list->hire_date }}</td>
                                    @can('role', ['supervisor'])
                                        @if (URL::current() == route('employees'))
                                            <td class="text-center">
                                                <button type="button" class="btn btn-warning">
                                                    <a style="text-decoration: none; color: white"
                                                        href="{{ url('/editForm/' . $list->id) }}">
                                                        Edit
                                                    </a>
                                                </button>
                                                <form action="{{ url('/destroy/' . $list->id) }}" method="post"
                                                    class="d-inline pl-2">
                                                    @method('delete')
                                                    @csrf
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

    <!-- MODAL CONTENT FORM -->
    <div class="modal fade" id="formCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Create Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="employee-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="employee-name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email</label>
                            <input class="form-control" id="email" type="email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone</label>
                            <input class="form-control" id="phone" type="text">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="col-form-label">Email</label>
                            <input class="form-control" id="position" type="text">
                        </div>
                        <div class="mb-3">
                            <label for="hire_date" class="col-form-label">Hire Date</label>
                            <input class="form-control" id="hire_date" type="date">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CONTENT DELETE -->
    <div class="modal fade" id="alertDelete" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    Are You Sure want delete this data ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
