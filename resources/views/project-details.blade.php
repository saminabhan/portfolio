@extends('layouts.app')
@section('content')

<style>
  .portfolio-details .portfolio-info .btn-visit{
    background: #4062B1;
  }
  .bg-blue{
    --bs-bg-opacity: 1;
    background: #4062B1;
  }
  .portfolio-details .swiper-pagination .swiper-pagination-bullet-active{
    background: #4062B1;
  }
  .portfolio-details .portfolio-info h3:after{
    background: #4062B1;
  }
  .page-title h1{
    color:#4062B1;
  }
</style>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">{{ $project['title'] }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li class="current">Portfolio Details</li>
            <li class="current">{{ $project['title'] }}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            @foreach($project['images'] as $image)
            <div class="swiper-slide">
              <img src="{{ $image }}" alt="{{ $project['title'] }}">
            </div>
            @endforeach

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>{{ $project['title'] }}</h2>
              <p>{{ $project['description'] }}</p>

              <h4 class="mt-4">Key Features:</h4>
              <ul>
                @foreach($project['features'] as $feature)
                <li>{{ $feature }}</li>
                @endforeach
              </ul>

              <h4 class="mt-4">Technologies Used:</h4>
              <p>
                @foreach($project['technologies'] as $tech)
                  <span class="badge bg-blue me-2">{{ $tech }}</span>
                @endforeach
              </p>

            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> {{ $project['category'] }}</li>
                <li><strong>Client</strong> {{ $project['client'] }}</li>
                <li><strong>Project date</strong> {{ $project['date'] }}</li>
                <li><strong>Project URL</strong> <a href="{{ $project['url'] }}">{{ $project['url'] }}</a></li>
                <li><a href="{{ $project['url'] }}" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>

            <!-- Navigation to other projects -->
            <div class="mt-4">
              <h4>Other Projects</h4>
              <div class="list-group">
                @foreach($allProjects as $id => $proj)
                  @if($id !== $projectId)
                  <a href="{{ route('project-details', $id) }}" class="list-group-item list-group-item-action">
                    <h6 class="mb-1">{{ $proj['title'] }}</h6>
                    <small class="text-muted">{{ $proj['category'] }}</small>
                  </a>
                  @endif
                @endforeach
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->
@endsection