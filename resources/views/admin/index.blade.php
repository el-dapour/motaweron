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
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">اهلا</li>
                            </ol>
                        </div>
                        <div>
                            <h2 style="font-size: 30px; color: darkred;">
                                Welcome to <a href="{{ route('front.homepage') }}" style="color: goldenrod; ">Motaweron</a>
                                Dashboard
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
