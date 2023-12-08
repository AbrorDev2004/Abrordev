@extends('layouts.admin')
@section('title', 'About - details')

@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Show About Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}"><i class="zmdi zmdi-home"></i> About</a></li>
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
                                <h4>Title: {{ $about->title }}</h4>
                                <img src="{{ asset('assets/img/'.$about->image) }}" alt="{{ $about->title }}" class="img-fluid" width="200px"><br><br>
                                <p> Name: {{ $about->name }}</p>
                                <p> Job title: {{ $about->job_title }}</p>
                                <p> Description: {{ $about->description }}</p>
                                <p> Birthday: {{ $about->birthday }}</p>
                                <p> Website: {{ $about->website }}</p>
                                <p> Phone: {{ $about->phone }}</p>
                                <p> City: {{ $about->city }}</p>
                                <p> Address: {{ $about->address }}</p>
                                <p> Age: {{ $about->age }}</p>
                                <p> Degree: {{ $about->degree }}</p>
                                <p> Email: {{ $about->email }}</p>
                                <p> Freelance: {{ $about->freelance_status }}</p>
                                <p> Additional info: {{ $about->additional_info }}</p>
                                <p> Created At: {{ $about->created_at }}</p>
                                <p> Updated At: {{ $about->updated_at }}</p>

                                <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-primary m-t-15 waves-effect">EDIT</a>
                                <a href="{{ route('admin.about.index') }}" class="btn btn-dark m-t-15 waves-effect">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
