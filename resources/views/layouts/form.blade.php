@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-4 p-3">@yield('content-title')</h1>
            <form action=" @yield('form-action') " class="@yield('form-classes', 'col-6')" method="POST">
                @csrf
                @yield('form-method')

                @yield('form-content')
            </form>
        </div>
    </div>
@endsection
