@extends('partials.master')

@section('stylesheets')
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('blog_gallery/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('blog_gallery/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog_gallery/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog_gallery/css/magnific-popup.css') }}">


        <link rel="stylesheet" href="{{ asset('blog_gallery/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('blog_gallery/css/jquery.timepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('blog_gallery/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('blog_gallery/css/style.css') }}">
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Gallery</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
          <div class="container">
              <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-1.jpg);">
              <a href="images/gallery-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Cat</span>
                    <h2><a href="work-single.html">Persian Cat</a></h2>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-2.jpg);">
              <a href="images/gallery-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Dog</span>
                    <h2><a href="work-single.html">Pomeranian</a></h2>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-3.jpg);">
              <a href="images/gallery-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Cat</span>
                    <h2><a href="work-single.html">Sphynx Cat</a></h2>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-4.jpg);">
              <a href="images/gallery-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Cat</span>
                    <h2><a href="work-single.html">British Shorthair</a></h2>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-5.jpg);">
              <a href="images/gallery-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Dog</span>
                    <h2><a href="work-single.html">Beagle</a></h2>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-6.jpg);">
              <a href="images/gallery-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Dog</span>
                    <h2><a href="work-single.html">Pug</a></h2>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-7.jpg);">
              <a href="images/gallery-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Cat</span>
                    <h2><a href="work-single.html">British Shorthair</a></h2>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-8.jpg);">
              <a href="images/gallery-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Dog</span>
                    <h2><a href="work-single.html">Beagle</a></h2>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-9.jpg);">
              <a href="images/gallery-9.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                          <span class="fa fa-expand"></span>
                      </a>
              <div class="desc w-100 px-4">
                <div class="text w-100 mb-3">
                    <span>Dog</span>
                    <h2><a href="work-single.html">Pug</a></h2>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
          </div>
      </section>

@endsection

@section('scripts')
        <script src="{{ asset('blog_gallery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/popper.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/scrollax.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('blog_gallery/js/google-map.js') }}"></script>
        <script src="{{ asset('blog_gallery/js/main.js') }}"></script>
@endsection