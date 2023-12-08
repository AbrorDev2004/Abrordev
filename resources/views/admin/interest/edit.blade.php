@extends('layouts.admin')
@section('title', 'Interest Edit')
@section('css')
    <!-- Colorpicker Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
@endsection
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Edit Interest Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.interest.index') }}"><i class="zmdi zmdi-home"></i>Interest</a></li>
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
                                <form action="{{ route('admin.interest.update', $interest->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Name</h2>
                                        <input type="text" class="form-control" placeholder="name yozing" name="name" value="{{ $interest->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Icon</h2>
                                        ikonkalarni kodlarini ushbu <a href="https://remixicon.com/" target="_blank">link </a>oraqali topishingiz mumkin
                                        <input type="text" class="form-control" placeholder="icon nomi yozing, misol: ri-code-line" name="icon" value="{{ $interest->icon }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Rangni kiriting</label>
                                        <div class="input-group colorpicker colorpicker-element">
                                            <input type="text" class="form-control" value="{{ $interest->color }}" name="color" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="input-group-addon"> <i style="background-color: rgb(0, 0, 0);"></i> </span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Saqlash</button>
                                        <a type="submit" class="btn btn-raised btn-primary btn-round waves-effect" href="{{ route('admin.interest.index') }}">Bekor qilish</a>
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
    <script src="{{ asset('admin/assets/js/pages/forms/advanced-form-elements.js') }}"></script>  <!-- Advanced Form Elements Js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js -->
@endsection