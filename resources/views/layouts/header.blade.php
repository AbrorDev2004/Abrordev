<!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="">{{ $about->name }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>{{ $header->description }}</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        @foreach ($about->socialLinks as $link)
          <a href="{{ $link->url }}" class="{{ $link->name }}"><i class="{{ $link->icon }}"></i></a>  
        @endforeach
      </div>

    </div>
  </header><!-- End Header -->