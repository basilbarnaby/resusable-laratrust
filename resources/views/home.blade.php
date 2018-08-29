@extends('layouts.main')

@section('pageTitle')
    Home
@endsection

@section('pageHeader')
    Home
@endsection

@section('topButtons')
    <p class="text-right">Welcome back, {{ auth()->user()->fname }}</p>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Laratrust Reusable</h3>
            <p>This resulable has Laratrust Roles and Permissions CRUD powered by Laravel and VUE.js</p>
            <hr>
        </div>
    </div>
@endsection