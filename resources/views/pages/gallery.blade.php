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
<style>
#header.header-transparent {
    background: rgba(26, 128, 43, 0.9);
}
</style>
<br>
<br>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
              @if($front_gallery->count() > 0)
              @foreach($front_gallery as $row)
                <div class="col-md-4 ftco-animate">
                    <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('/img/galleryz/'.$row->img) }});">
                        <a href="{{ asset('/img/galleryz/'.$row->img) }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                
                                <h2>{{ $row->description }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <h6 class="text-center text-danger">Gallery Coming Soon!</h6>
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
