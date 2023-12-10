@extends('layouts.site')
@section('content')
    <main id="main">
        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="portfolio-title">{{ $portfolio->title }}</h2>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                              @foreach ($portfolio->portfolioPics as $pic)
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/img/portfolio/'.$pic->image) }}" alt="">
                                </div>
                              @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $portfolio->category->name }}</li>
                            <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                            <li><strong>Project date</strong>: {{ $portfolio->project_date }}</li>
                            <li><strong>Project URL</strong>: <a href="https://{{ $portfolio->url }}" target="_blank" >{{ $portfolio->url  }}</a></li>
                        </ul>
                        <p>
                            <h5>Description:</h5> 
                            {{ $portfolio->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- End Portfolio Details -->
    </main><!-- End #main -->
@endsection
