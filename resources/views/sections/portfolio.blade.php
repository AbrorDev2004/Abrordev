  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
      <div class="container">

          <div class="section-title">
              <h2>Portfolio</h2>
              <p>My Works</p>
          </div>

          <div class="row">
              <div class="col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">All</li>
                      @foreach ($categories as $category)
                          <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>
                      @endforeach
                  </ul>
              </div>
          </div>

          <div class="row portfolio-container">
              @foreach ($portfolios as $portfolio)
                  <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->category->name }}">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('assets/img/portfolio/' . $portfolio->image) }}" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>{{ $portfolio->title }}</h4>
                              <p>{{ $portfolio->category->name }}</p>
                              <div class="portfolio-links">
                                  <a href="assets/img/portfolio/{{ $portfolio->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                  <a href="/portfolio-details/{{ $portfolio->id }}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>

      </div>
  </section><!-- End Portfolio Section -->
