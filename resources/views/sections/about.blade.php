  <!-- ======= About Section ======= -->
  <section id="about" class="about">

      <!-- ======= About Me ======= -->
      <div class="about-me container">

          <div class="section-title">
              <h2>About</h2>
              <p>Learn more about me</p>
          </div>

          <div class="row">
              <div class="col-lg-4" data-aos="fade-right">
                  <img src="{{ asset('assets/img/' . $about->image) }}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                  <h3>{{ $about->job_title }}</h3>
                  <p class="fst-italic">
                      {{ $about->description }}
                  </p>
                  <div class="row">
                      <div class="col-lg-6">
                          <ul>
                              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $about->birthday }}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about->website }}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->phone }}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->city }}</span></li>
                          </ul>
                      </div>
                      <div class="col-lg-6">
                          <ul>
                              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age }}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about->degree }}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{ $about->email }}</span></li>
                              <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about->freelance_status }}</span></li>
                          </ul>
                      </div>
                  </div>
                  <p>
                      {{ $about->additional_info }}
                  </p>
              </div>
          </div>

      </div><!-- End About Me -->

      <!-- ======= Counts ======= -->
      <div class="counts container">

          <div class="row">
              @foreach ($counts as $count)
                  <div class="col-lg-3 col-md-6">
                      <div class="count-box">
                          <i class="{{ $count->icon }}"></i>
                          <span data-purecounter-start="0" data-purecounter-end="{{ $count->number }}" data-purecounter-duration="1" class="purecounter"></span>
                          <p>{{ $count->description }}</p>
                      </div>
                  </div>
              @endforeach
          </div>

      </div><!-- End Counts -->

      <!-- ======= Skills  ======= -->
      <div class="skills container">

          <div class="section-title">
              <h2>Skills</h2>
          </div>

          <div class="row skills-content">
              @php
                  $firstHalf = $skills->slice(0, ceil($skills->count() / 2));
                  $secondHalf = $skills->slice(ceil($skills->count() / 2));
              @endphp
              <div class="col-lg-6">
                  @foreach ($firstHalf as $skill)
                      <div class="progress">
                          <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->level }}%</i></span>
                          <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                  @endforeach
              </div>

              <div class="col-lg-6">
                  @foreach ($secondHalf as $skill)
                      <div class="progress">
                          <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->level }}%</i></span>
                          <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                  @endforeach
              </div>

          </div>

      </div><!-- End Skills -->

      <!-- ======= Interests ======= -->
      <div class="interests container">

          <div class="section-title">
              <h2>Interests</h2>
          </div>

          <div class="row">
              @foreach ($interests as $interest)
                  <div class="
                    @if ($loop->iteration == 1)
                        col-lg-3 col-md-4
                    @elseif ($loop->iteration == 2 || $loop->iteration == 3)
                        col-lg-3 col-md-4 mt-4 mt-md-0 
                    @elseif ($loop->iteration == 4)
                        col-lg-3 col-md-4 mt-4 mt-lg-0 
                    @else 
                        col-lg-3 col-md-4 mt-4
                    @endif">
                      <div class="icon-box">
                          <i class="{{ $interest->icon }}" style="color: {{ $interest->color }};"></i>
                          <h3>{{ $interest->name }}</h3>
                      </div>
                  </div>
              @endforeach
          </div>

      </div><!-- End Interests -->

      <!-- ======= Testimonials ======= -->
      <div class="testimonials container">

          <div class="section-title">
              <h2>Testimonials</h2>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                  @foreach ($testimonials as $testimonial)
                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <p>
                                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                  {{ $testimonial->testimonial }}
                                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                              </p>
                              <img src="{{ asset('assets/img/testimonials/' . $testimonial->image) }}" class="testimonial-img" alt="">
                              <h3>{{ $testimonial->name }}</h3>
                              <h4>{{ $testimonial->position }}</h4>
                          </div>
                      </div><!-- End testimonial item -->
                  @endforeach
              </div>
              <div class="swiper-pagination"></div>
          </div>

          <div class="owl-carousel testimonials-carousel">

          </div>

      </div><!-- End Testimonials  -->

  </section><!-- End About Section -->
