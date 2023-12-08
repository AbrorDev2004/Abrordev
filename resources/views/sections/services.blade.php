<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>My Services</p>
        </div>

        <div class="row">
            @foreach ($services as $service)
                <div class="
                @if ($loop->iteration == 1)
                  col-lg-4 col-md-6 d-flex align-items-stretch
                @elseif ($loop->iteration == 2)
                  col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0
                @elseif ($loop->iteration == 3)
                  col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0
                @else 
                  col-lg-4 col-md-6 d-flex align-items-stretch mt-4 
                @endif">
                    <div class="icon-box">
                        <div class="icon"><i class="{{ $service->icon }}"></i></div>
                        <h4><a href="">{{ $service->title }}</a></h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Services Section -->
