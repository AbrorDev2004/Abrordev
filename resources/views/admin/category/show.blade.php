@extends('layouts.admin')
@section('title', 'Category - details')

@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Show Category Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}"><i class="zmdi zmdi-home"></i> Category</a></li>
                            <li class="breadcrumb-item active">Show</li>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="body">
                                <!-- Bu qismga about ma'lumotlarini chiqarish kodlari keladi -->
                                <h4>Category name: {{ $category->name }}</h4>
                                <ul>
                                    @foreach($category->portfolios as $portfolio)
                                        <li>
                                            <a href="{{ route('admin.portfolio.show', $portfolio->id) }}">{{ $portfolio->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary m-t-15 waves-effect">EDIT</a>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-dark m-t-15 waves-effect">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
