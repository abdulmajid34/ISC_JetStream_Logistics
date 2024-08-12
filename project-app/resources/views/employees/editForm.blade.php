@extends('layouts.index')
@section('content')
    <div class="container">
        <h3 class="my-3">Update Form Employee</h3>
        <div class="row">
            <form action="{{ url('/editForm/' . $listEmployee->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="col card rounded shadow-sm p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Name</label>
                                <input type="text"
                                    class="form-control @error('name')
                                    is-invalid
                                @enderror"
                                    id="name" name="name" placeholder="your name" value="{{ $listEmployee->name }}">
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Email</label>
                                <input
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    id="email" type="email" name="email" placeholder="your email"
                                    value="{{ $listEmployee->email }}">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="hire_date" class="col-form-label">Hire Date</label>
                                <input
                                    class="form-control @error('hire_date')
                                    is-invalid
                                @enderror"
                                    id="hire_date" type="date" name="hire_date" value="{{ $listEmployee->hire_date }}">
                                @error('hire_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="col-form-label">Phone</label>
                                <input
                                    class="form-control @error('phone')
                                    is-invalid
                                @enderror"
                                    id="phone" type="text" name="phone" placeholder="08xxx"
                                    value="{{ $listEmployee->phone }}">
                                @error('phone')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="position" class="col-form-label">Position</label>
                                <select name="position"
                                    class="form-select @error('position')
                                    is-invalid
                                @enderror"
                                    aria-label="Default select example">
                                    <option selected disabled>Choose Your Position</option>
                                    <option value="Warehouse Manager"
                                        {{ $listEmployee->position == 'Warehouse Manager' ? 'selected' : '' }}>Warehouse
                                        Manager
                                    </option>
                                    <option value="Inventory Specialist"
                                        {{ $listEmployee->position == 'Inventory Specialist' ? 'selected' : '' }}>Inventory
                                        Specialist
                                    </option>
                                    <option value="Forklift Operator"
                                        {{ $listEmployee->position == 'Forklift Operator' ? 'selected' : '' }}>Forklift
                                        Operator
                                    </option>
                                    <option value="Picker/Packer"
                                        {{ $listEmployee->position == 'Picker/Packer' ? 'selected' : '' }}>Picker/Packer
                                    </option>
                                    <option value="Warehouse Clerk"
                                        {{ $listEmployee->position == 'Warehouse Clerk' ? 'selected' : '' }}>Warehouse
                                        Clerk
                                    </option>
                                    <option value="Receiving Clerk"
                                        {{ $listEmployee->position == 'Receiving Clerk' ? 'selected' : '' }}>Receiving
                                        Clerk
                                    </option>
                                    <option value="Shipping Clerk"
                                        {{ $listEmployee->position == 'Shipping Clerk' ? 'selected' : '' }}>Shipping Clerk
                                    </option>
                                    <option value="Quality Control Inspector"
                                        {{ $listEmployee->position == 'Quality Control Inspector' ? 'selected' : '' }}>
                                        Quality
                                        Control Inspector</option>
                                </select>
                                @error('position')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end" style="margin-top: 2rem">
                    <button type="button" class="btn btn-secondary mx-2">
                        <a href="{{ route('employees') }}" style="text-decoration: none; color: white">Back</a>
                    </button>
                    <button class="btn btn-primary mx-2" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
