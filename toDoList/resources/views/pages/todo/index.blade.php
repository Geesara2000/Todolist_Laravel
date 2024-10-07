@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">My Todo List</h1>
            </div>
            <div class="col-lg-12 text-center">
                <form action="{{ route('todo.store') }}"  method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 ">
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" placeholder="Enter task">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-primary">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title{
            padding-top: 15vh;
            color: cadetblue;
            font-size: 5rem;
        }
    </style>
@endpush
