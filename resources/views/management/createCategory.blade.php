@extends('layouts.app')

@section('content')
    <div class="container bg-light">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="/management/category" class="list-group-item list-group-item-action"><i
                            class="fas fa-align-justify"></i> Category</a>
                    <a href="/management/menu" class="list-group-item list-group-item-action"><i class="fas fa-hamburger"></i>
                        Menu</a>
                    <a href="/management/table " class="list-group-item list-group-item-action"><i class="fas fa-chair"></i>
                        Table</a>
                    <a href="/management/user" class="list-group-item list-group-item-action"><i
                            class="fas fa-users-cog"></i> User</a>
                </div>
            </div>
            <div class="col-md-8">
                <i class="fas fa-align-justify"> Create a Category</i>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/management/category" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="categoryName">Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder="category...">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Save</button>
                </form>

            </div>
        </div>
    </div>
@endsection
