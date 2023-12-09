@extends('layouts.admin')
@section('title', 'Portfolio - details')

@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Show Portfolio Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}"><i class="zmdi zmdi-home"></i> Portfolio</a></li>
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
                                <h4>Title: {{ $portfolio->title }}</h4>
                                <img src="{{ asset('assets/img/portfolio/'.$portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid" width="200px"><br><br>
                                <p> Name: {{ $portfolio->name }}</p>
                                <p> Url: <a href="https://{{ $portfolio->url }}">{{ $portfolio->url }}</a></p>
                                <p> Category: 
                                    <a href="{{ route('admin.category.show', $portfolio->category->id) }}">{{ $portfolio->category->name }}</a>
                                </p>
                                <p> Client: {{ $portfolio->client }}</p>
                                <p> Date: {{ $portfolio->project_date }}</p>
                                <p class="m-t-30"> Description: {!! $portfolio->description !!}</p>
                                <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-primary m-t-15 waves-effect">EDIT</a>
                                <a href="{{ route('admin.portfolio.index') }}" class="btn btn-dark m-t-15 waves-effect">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
