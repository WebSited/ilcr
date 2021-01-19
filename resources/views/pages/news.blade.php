@extends('partials.master')

@section('stylesheets')
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('blog_gallery/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('blog_gallery/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('blog_gallery/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('blog_gallery/css/style.css') }}">
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-5 bread"><b>News</b></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="{{ route('news_single') }}">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_4.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_5.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_6.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
        <script src="{{ asset('blog_gallery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/main.js') }}"></script>
@endsection