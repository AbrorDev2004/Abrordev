@extends('layouts.admin')
@section('title', 'link edit')
@section('css')
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
@endsection
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Create Link Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.link.index') }}"><i class="zmdi zmdi-home"></i> Social links</a></li>
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
                                <form action="{{ route('admin.link.update', $link->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Name</h2>
                                        <input type="text" class="form-control" placeholder="Nomini yozing" name="name" value="{{ $link->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Icon</h2>
                                        Ushbu <a href="https://icons.getbootstrap.com/" target="_blank">link</a> orqali icon kodlarini topishingiz mumkin
                                        <input type="text" class="form-control" placeholder="icon nomini yozing" name="icon" value="{{ $link->icon }}" required>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Description</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="3" class="form-control no-resize" placeholder="link uchun joy" name="url" required>{{ $link->url }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="card-inside-title">Qaysi aboutga tegish ekanligini tanlang</h2>
                                        <select class="form-control show-tick" name="about_id" required>
                                            @foreach ($abouts as $about)
                                                <option value="{{ $about->id }}" @if ($link->about_id == $about->id) selected @endif>{{ $about->name }}</option>
                                            @endforeach
                                        </select><br><br>
                                    </div>
                                    <div class="form-group">    
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Saqlash</button>
                                        <a type="submit" class="btn btn-raised btn-primary btn-round waves-effect" href="{{ route('admin.link.index') }}">Bekor qilish</a>
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
