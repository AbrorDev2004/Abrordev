@extends('layouts.admin')

@section('title', 'testimonials')
@section('css')
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@endsection
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Testimonials (mijozlar fikri)</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"><i class="zmdi zmdi-home"></i> Testimonials/</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button">
                            <i class="zmdi zmdi-sort-amount-desc"></i>
                        </button>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Bazadagi </strong> Malumotlar </h2>
                                <ul class="header-dropdown">
                                    <li>
                                        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary">Create</a>
                                    </li>
                                    <li class="remove">
                                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th width="8%">ID</th>
                                                <th width="10%">Image</th>
                                                <th>name</th>
                                                <th>Description</th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimonials as $testimonial)
                                                <tr>
                                                    <td>{{ $testimonial->id }}</td>
                                                    <td>
                                                        <img src="{{ asset('assets/img/testimonials/' . $testimonial->image) }}" class="raunded avatar" width="100%" alt="">
                                                    </td>
                                                    <td>{{ $testimonial->name }}</td>
                                                    <td>{{ $testimonial->testimonial }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.testimonial.show', $testimonial->id) }}" class="btn btn-info btn-sm"><i class="zmdi zmdi-eye"></i> View</a>
                                                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" class="btn btn-primary btn-sm"><i class="zmdi zmdi-edit"></i> Edit</a>
                                                        <form action="{{ route('admin.testimonial.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="zmdi zmdi-delete"></i> Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
@section('js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('admin/assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
