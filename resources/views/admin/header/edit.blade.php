@extends('layouts.admin')
@section('title', 'Header edit')
@section('css')
    <!-- Dropify Js -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/dropify/css/dropify.min.css') }}">
@endsection
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Edit Header Page - {{ $header->id }}</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.header.index') }}"><i class="zmdi zmdi-home"></i> Home</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Textarea -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Malumotlarni to'ldiring!</strong></h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <form action="{{ route('admin.header.update', $header->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Description</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" placeholder="bosh sahifada chiqib turuvchi tavsif yozing!" name="description" required>{{ $header->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Image</h2>
                                        <input type="file" class="dropify" data-allowed-file-extensions="png jpg jpeg" id="dropify-event" data-default-file="/assets/img/{{ $header->image }}" name="image">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Saqlash</button>
                                        <a type="submit" class="btn btn-raised btn-primary btn-round waves-effect" href="{{ route('admin.header.index') }}">Bekor qilish</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <!-- Dropify Js -->
    <script src="{{ asset('admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/forms/dropify.js') }}"></script>
@endsection
