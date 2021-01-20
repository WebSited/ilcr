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
        @if($front_news->count() > 0)
        @foreach($front_news as $row)
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="#" class="block-20 rounded" style="background-image: url('{{ asset('/img/news/'.$row->img) }}');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</a></div>
                <div><a href="#">{{ $row->author }}</a></div>
              </div>
              <h3 class="heading"><a href="{{ route('show.news', ['id' => $row->id]) }}">{{ $row->title }}</a></h3>
            </div>
          </div>
        </div>
        @endforeach
        @else
            <h6 class="text-center text-danger">No News Available</h6>
        @endif
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