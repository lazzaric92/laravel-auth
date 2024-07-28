@extends('layouts.admin')

@section('page-title', 'Projects Index')

@section('content')
    <div class="container">
        <h1 class="text-center fw-bold mb-4">Projects</h1>

        <table class="table table-hover table-striped">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Languages</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td> {{$project->id}} </td>
                        <td> {{$project->title}} </td>
                        <td> {{$project->languages}} </td>
                        <td> {{$project->date}} </td>
                        <td>
                            <a href=" {{route('admin.projects.show', $project)}} " class="btn btn-info btn-sm ms-1">Info</a>
                            <a href="" class="btn btn-warning btn-sm ms-1">Edit</a>
                            <a href="" class="btn btn-secondary btn-sm ms-1">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
