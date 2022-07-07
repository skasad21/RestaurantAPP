@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @include('management.inc.sidebar')
      <div class="col-md-8">
        <i class="fas fa-chair"> Create a Table </i>
        <hr>
        @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </ul>
          </div>
        @endif
        <form action="/management/table" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="tableName">Table Name</label>
            <input type="text" name="name" class="form-control" placeholder="Table...">
          </div>
          <button type="submit" class="btn btn-primary float-end">Save</button>
        </form>
      </div>
    </div>
  </div>
@endsection
