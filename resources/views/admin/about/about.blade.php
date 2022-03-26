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
                                <li class="breadcrumb-item active"> من نحن </li>
                            </ol>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-2 mt-4">
                        <h6 style="font-weight: bold">About</h6>
                        <a class="btn btn-sm btn-primary " href="{{ route('admin.about.create') }}">Create</a>
                    </div>
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($abouts as $about)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $about->name }}</td>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->desc }}</td>
                            <td>
                            <a class="btn btn-sm btn-info mb-2 " href="{{ route('admin.about.edit', $about->id)}}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('admin.about.delete', $about->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
            </div>
        </div>
    </div>

@endsection
