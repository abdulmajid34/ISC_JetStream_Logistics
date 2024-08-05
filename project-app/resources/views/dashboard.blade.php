@extends('layouts.index')
@section('content')
    @can('role', ['admin'])
        <h1>Hai Admin. <br>
            Welcome to dashboard</h1>
    @endcan
    @can('role', ['supervisor'])
        <h1>Hai Supervisor. <br>
            Welcome to dashboard</h1>
    @endcan
    </div>
    </main>
@endsection
