@extends('admin.layouts.layout')

@section('content')
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
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">Services</li>
                        </ol>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2 mt-4">
                    <h6 style="font-weight: bold">Services</h6>
                    <a class="btn btn-sm btn-primary " href="{{ route('admin.serves.create') }}">Create</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">B-ground image</th>
                        <th scope="col">title</th>
                        <th scope="col">image</th>
                        <th scope="col">Description</th>
                        <th scope="col">category name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($serves as $s)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $s->name }}</td>
                    <td>
                        <img src="{{ asset('/img/' .$s->bg_img) }}" height="60px">
                    </td>
                    <td>{{ $s->title }}</td>
                    <td>
                        <img src="{{ asset('/img/' .$s->img) }}" height="60px">
                    </td>
                    <td>{{ $s->desc }}</td>
                    <td>{{ $s->cats->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('admin.serves.edit', $s->id)}}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{ route('admin.serves.delete', $s->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
