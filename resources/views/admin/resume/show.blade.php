@extends('layouts.admin')
@section('title', 'Resume Show')

@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Show Resume Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.resume.index') }}"><i class="zmdi zmdi-home"></i> Resume</a></li>
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
                                <h4>Title: {{ $resume->title }}</h4>
                                <p> Section: {{ $resume->section }}</p>
                                <p> Start Date: {{ $resume->start_date }}</p>
                                <p> End Date: {{ $resume->end_date }}</p>
                                <p> Institution: {{ $resume->institution }}</p>
                                <p>Description: {!! $resume->description !!}</p>
                                <p> Created At: {{ $resume->created_at }}</p>
                                <p> Updated At: {{ $resume->updated_at }}</p>

                                <a href="{{ route('admin.resume.edit', $resume->id) }}" class="btn btn-primary m-t-15 waves-effect">EDIT</a>
                                <a href="{{ route('admin.resume.index') }}" class="btn btn-dark m-t-15 waves-effect">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
