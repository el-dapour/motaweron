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
                            <li class="breadcrumb-item active">اعمالنا</li>
                        </ol>
                    </div>
                    </div>
                    <div class="d-flex justify-content-between mb-2 mt-4">
                        <h6 style="font-weight: bold">أعمالنا</h6>
                        <a class="btn btn-sm btn-primary " href="{{ route('admin.portfolio.create') }}">Create</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $portfolio->name }}</td>
                            <td>
                                <img src="{{ asset('img/portfolio/' .$portfolio ->img) }}" height="60px">
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('admin.portfolio.edit', $portfolio->id)}}">Edit</a>
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.portfolio.delete', $portfolio->id)}}">Delete</a>
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
