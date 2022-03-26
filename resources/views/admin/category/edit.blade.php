@extends('admin.layouts.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- header -->
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">اهلا بك في المطورون</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right mb-5">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">اهلا</li>
                        </ol>
                    </div>
                    <div class=" justify-content-between mb-5 mt-4">
                        <h6>Courses / Edit</h6>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.cat.index') }}">Back</a>
                    </div>
                    @include('admin.include.errors')
                    <div class="form-group mt-5">
                        <form method="POST" action="{{ route('admin.cat.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" class="form-control" value="{{ $cats->id }}">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $cats->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
