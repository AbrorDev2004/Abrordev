@extends('layouts.admin')
@section('title', 'Create Resume')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/summernote/dist/summernote.css') }}" />
@endsection
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Create Resume Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.resume.index') }}"><i class="zmdi zmdi-home"></i> Resumes</a></li>
                            <li class="breadcrumb-item active">Create</li>
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
                                <form action="{{ route('admin.resume.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Section</h2>
                                        <input type="text" class="form-control" placeholder="section nomini yozing" name="section" required>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Title</h2>
                                        <input type="text" class="form-control" placeholder="sarlavhani yozing" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Start date</h2>
                                        <input type="date" class="form-control" placeholder="boshlanish sanasini belgilang" name="start_date" required>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">End date</h2>
                                        <input type="date" class="form-control" placeholder="tugash sanasini belgilang" name="end_date">
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Institution</h2>
                                        <input type="text" class="form-control" placeholder="o'qigan yoki tajriba ortirgan ish joyi nomini yozing" name="institution" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" id="summernote" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Saqlash</button>
                                        <a type="submit" class="btn btn-raised btn-primary btn-round waves-effect" href="{{ route('admin.resume.index') }}">Bekor qilish</a>
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
    <script src="{{ asset('admin/assets/plugins/summernote/dist/summernote.js') }}"></script>
@endsection
