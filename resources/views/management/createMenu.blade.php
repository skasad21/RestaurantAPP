@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-hamburger"> Create a Menu </i>
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
                <form action="/management/menu" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="menuName">Menu Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Menu...">
                    </div>
                    <label for="menuPrice">Price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">৳</span>
                        </div>
                        <input type="text" name="price" class="form-control"
                            aria-label="Amount (to the nearest Taka)">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>

                    <label for="MenuImage">Image</label>
                    <div class="input-group mb-3">
                        {{-- <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div> --}}
                        {{-- <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
                        </div> --}}

                        <div class="input-group mb-3">
                            <input type="file" name="image" class="form-control" id="inputGroupFile01">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="Description">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description...">
                    </div>

                    {{-- <div class="form-group mb-3">
                        <label for="Category">Category</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="Category">Category</label>
                        <select class="form-select" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary float-end">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
