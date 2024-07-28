@extends('layouts.admin')

@section('page-title', )
    '#{{$project->id}}: {{$project->title}}'
@endsection

@section('head-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <article class="col-12">
                <div class="row justify-content-center">
                    <div class="col-10 mb-4">
                        <h2 class="text-center mb-3 p-3"> #{{$project->id}}: {{$project->title}} </h2>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <p> {{$project->date}} </p>
                            <p> <span><i class="fa-brands fa-github me-2"></i></span> {{$project->github}} </p>
                        </div>
                        <p> {{$project->description}} </p>
                        {{-- (if devs > 1)
                            nome => url
                        --}}
                    </div>
                    <div class="col-8 text-center">
                        @if ($project->image != 'NULL')
                            <img src=" {{$project->image}} " alt=" {{$project->title}} screen">
                        @endif
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection
