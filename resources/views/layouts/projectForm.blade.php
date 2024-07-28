@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-2 p-3">@yield('content-title')</h1>

            @if ($errors->any())
                <div class="alert alert-warning mb-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action=" @yield('form-action') " class="@yield('form-classes', 'col-6')" method="POST">
                @csrf
                @yield('form-method')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title??null)}}">
                </div>

                <div class="mb-3">
                    <label for="devs" class="form-label">Dev/s</label>
                    <input type="text" class="form-control" id="devs" name="devs" value="{{old('devs', $project->devs??null)}}">
                </div>

                <div class="mb-3">
                    <label for="languages" class="form-label">Languages</label>
                    <input type="text" class="form-control" id="languages" name="languages" value="{{old('languages', $project->languages??null)}}">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{old('date', $project->date??null)}}">
                </div>

                <div class="mb-3">
                    <label for="github" class="form-label">Github url</label>
                    <input type="text" class="form-control" id="github" name="github" value="{{old('github', $project->github??null)}}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{old('image', $project->image??null)}}">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="description" id="description" cols="80" rows="10" placeholder="Write your project description" value="{{old('description', $project->description??null)}}"></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn @yield('button-classes')">@yield('button-value')</button>
                    <input type="reset" value="Reset" class="btn btn-outline-dark">
                </div>
            </form>
        </div>
    </div>
@endsection
