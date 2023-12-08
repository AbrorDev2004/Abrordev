@extends('layouts.admin')
@section('title', 'testimonial - details')

@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Show Testimonial Page</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.testimonial.index') }}"><i class="zmdi zmdi-home"></i> Testimonial</a></li>
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
                                <h4>Name: {{ $testimonial->name }}</h4>
                                <img src="{{ asset('assets/img/testimonials/'.$testimonial->image) }}" alt="{{ $testimonial->name }}" class="img-fluid" width="200px"><br><br>
                                <p> Position: {{ $testimonial->position }}</p>
                                <p> Company:   {{ $testimonial->company }}</p>
                                <p> Testimonial: {{ $testimonial->testimonial }}
                                <p> Created At: {{ $testimonial->created_at }}</p>
                                <p> Updated At: {{ $testimonial->updated_at }}</p>

                                <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" class="btn btn-primary m-t-15 waves-effect">EDIT</a>
                                <a href="{{ route('admin.testimonial.index') }}" class="btn btn-dark m-t-15 waves-effect">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
