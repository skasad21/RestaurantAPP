@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2" id="table-detail"></div>
        <div class="row justify-content-center">
            <div class="col-md-5 d-grid gap-2">
                <button class="btn btn-primary" id="btn-show-tables">View All Tables</button>
            </div>
            <div class="col-md-7">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href="" class="nav-link" data-id="{{ $category->id }}" data-toggle="tab">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </div>
                </nav>
            </div>
        </div>
    </div>

    {{-- jQuiry --}}
    <script>
        $(document).ready(function() {
            // make table-detail hidden by default
            $("#table-detail").hide();
            // show all table when click on the button
            $("#btn-show-tables").click(function() {

                if ($("#table-detail").is(":hidden")) {

                    $.get("/cashier/getTable", function(data) {
                        $("#table-detail").html(data);
                        $("#table-detail").slideDown('fast');
                        $("#btn-show-tables").html('Hide Tables').removeClass('btn-primary')
                            .addClass('btn-danger');
                    });

                } else {
                    $("#table-detail").slideUp('fast');
                    $("#btn-show-tables").html('View All Tables').removeClass('btn-danger')
                        .addClass('btn-primary');
                }


            });


            //Load manus by category








        });
    </script>
@endsection
