@extends('layouts.projectForm')

{{-- <--Titles --}}
@section('page-title', 'Add project')

@section('content-title', 'Add project')

{{-- <-- Form --}}
@section('form-action', )
    {{ route('admin.projects.store')}}
@endsection

@section('form-classes', 'col-6 create-form')

{{-- <-- Button --}}
@section('button-classes', 'btn-primary')
@section('button-value', 'Add')

{{-- <-- Script --}}
@section('custom-script')
    @vite('resources/js/confirm-create.js')
@endsection
