@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mb-2 p-3">@yield('page-title')</h1>

            <form action=" @yield('form-action') " class="@yield('form-classes', 'col-6')" method="POST" data-project-title="{{$project->title}}">
                @csrf
                @yield('form-method')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title', $project->title??null)}}">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="add_devs" class="form-label">Additional Dev/s</label>
                    <input type="text" class="form-control" id="add_devs" name="add_devs" value="{{old('add_devs', $project->add_devs??null)}}">
                    @error('add_devs')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="languages" class="form-label">Languages</label>
                    <input type="text" class="form-control" id="languages" name="languages" value="{{old('languages', $project->languages??null)}}">
                    @error('languages')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{old('date', $project->date??null)}}">
                    @error('date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="github" class="form-label">Github url</label>
                    <input type="text" class="form-control" id="github" name="github" value="{{old('github', $project->github??null)}}">
                    @error('github')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{old('image', $project->image??null)}}">
                    @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="description" id="description" cols="80" rows="10" placeholder="Write your project description">{{old('description', $project->description??null)}}</textarea>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn @yield('button-classes')">@yield('button-value')</button>
                    <input type="reset" value="Reset" class="btn btn-outline-dark">
                </div>
            </form>
        </div>
    </div>
@endsection
