@extends('layouts.admin')

@section('title', 'Portfolio')
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
                        <h2>Portfolio Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"><i class="zmdi zmdi-home"></i> Portfolio/</li>
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
                                        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Create</a>
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
                                                <th width="30%">Image</th>
                                                <th width="12%">Column</th>
                                                <th>Malumotlari</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($portfolios as $portfolio)
                                                <tr>
                                                    <td rowspan="4">
                                                        <img src="{{ asset('assets/img/portfolio/' . $portfolio->image) }}" alt="" width="100%">
                                                    </td>
                                                    <td>Name</td>
                                                    <td>{{ $portfolio->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>url</td>
                                                    <td><a href="https://{{ $portfolio->url }}">{{ $portfolio->url }}</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Category</td>
                                                    <td>{{ $portfolio->category->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Action</td>
                                                    <td>
                                                        <a href="{{ route('admin.portfolio.show', $portfolio->id) }}" class="btn btn-info btn-sm"><i class="zmdi zmdi-eye"></i> View</a>
                                                        <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-primary btn-sm"><i class="zmdi zmdi-edit"></i> Edit</a>
                                                        <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST" class="d-inline">
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
    <script src="{{ asset('admin/assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
