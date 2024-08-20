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
            <form action="{{ route('employees') }}">
                <div class="row">

                    <div class="col-9">
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label for="filter_name" class="form-label">Employee Name</label>
                                    <input type="text" class="form-control" id="filter_name" name="name"
                                        placeholder="name" value="{{ request('name') }}">
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <label for="filter_phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="filter_phone" name="phone"
                                        placeholder="phone" value="{{ request('phone') }}">
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <label for="filter_position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="filter_position" name="position"
                                        placeholder="position" value="{{ request('position') }}">
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <label for="filter_hiredate" class="form-label">Hire Date</label>
                                    <input type="date" class="form-control" id="filter_hiredate" name="hire_date"
                                        placeholder="*month" value="{{ request('hire_date') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-4">
                        <button class="btn btn-primary" type="submit">Search</button>
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
                </div>
            </form>



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
                            @forelse ($employees as $list)
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
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Employees Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>


                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{-- {{ $employees->onEachSide(1)->links('pagination::bootstrap-5') }} --}}
                    {{ $employees->links('pagination::bootstrap-5') }}
                </div>

            </div>

        </div>
    </div>

@endsection
