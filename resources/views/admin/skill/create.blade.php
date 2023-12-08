@extends('layouts.admin')
@section('title', 'Skill Create')

@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Create Skill Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.interest.index') }}"><i class="zmdi zmdi-home"></i>Skills</a></li>
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
                                <form action="{{ route('admin.skill.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Name</h2>
                                        <input type="text" class="form-control" placeholder="nomini yozing" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Level</h2>
                                        <input type="number" class="form-control" placeholder="Daraja yozing" name="level" min="0" max="100" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Saqlash</button>
                                        <a type="submit" class="btn btn-raised btn-primary btn-round waves-effect" href="{{ route('admin.skill.index') }}">Bekor qilish</a>
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
