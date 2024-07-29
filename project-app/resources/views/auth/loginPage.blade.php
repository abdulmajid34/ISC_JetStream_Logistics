@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <!-- alert success login & error msg login -->

            <div class="card shadow-lg rounded">
                <div class="card-header text-center text-primary" style="font-size: 25px">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                id="exampleInputEmail1" name="email" placeholder="Your Email"
                                aria-describedby="emailHelp" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                id="exampleInputPassword1" name="password" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
