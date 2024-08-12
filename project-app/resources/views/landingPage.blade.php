@extends('layouts.template')
@section('content')
    <main class="" style="max-height: 770px">
        <div class="container py-4"
            style="background-image: url(landing_page2.png); background-position: 180px 50px; background-size: cover">
            <header class="pb-3 mb-4 border-bottom d-flex flex-row justify-content-between">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <i class="bi bi-book" style="font-size: 25px; margin-right: 10px"></i>
                    <span class="fs-4">ISC Jetsream Logistics</span>
                </a>

            </header>

            <div class="p-5 mb-4 rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">ISC Jetstream Logistics</h1>
                    <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, odit cumque!
                        Vel, fuga quam, porro ullam corporis eos quis nam suscipit quasi laboriosam recusandae
                        laudantium?</p>
                    <button class="btn btn-primary btn-lg" type="button"><a href="{{ route('loginPage') }}"
                            style="text-decoration: none; color: white">Browse Now</a></button>
                </div>
            </div>


            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; copyright by developer spaceEgg
            </footer>
        </div>
    </main>
@endsection
