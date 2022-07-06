@extends('layouts.app')

@section('content')
    <div class="container bg-light">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <h3>Welcome, {{ Auth::user()->name }}</h3>
                <p>Use the left Panel To Add Category, Menu, Table and User.</p>
            </div>
        </div>
    </div>
@endsection
