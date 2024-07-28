@extends('layouts.form')

@section('page-title', 'Add project')

@section('form-action', )

@endsection

@section('content-title', 'Add project')

@section('form-content')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
        <label for="devs" class="form-label">Dev/s</label>
        <input type="text" class="form-control" id="devs" name="devs">
    </div>

    <div class="mb-3">
        <label for="languages" class="form-label">Languages</label>
        <input type="text" class="form-control" id="languages" name="languages">
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="text" class="form-control" id="date" name="date">
    </div>

    <div class="mb-3">
        <label for="github" class="form-label">Github url</label>
        <input type="text" class="form-control" id="github" name="github">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>

    <div class="mb-3">
        <textarea class="form-control" name="description" id="description" cols="80" rows="10" placeholder="Write your project description"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Add project</button>
    </div>
@endsection
