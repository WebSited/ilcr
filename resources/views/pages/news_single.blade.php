@extends('partials.master')

@section('content')
    <style>
        #header.header-transparent {
            background: rgba(26, 128, 43, 0.9);
        }

        .news_singleimg {
            float: left;
            width: 450px;
            height: 300px;
            margin-top: 20px;
            margin-right: 20px;
        }

    </style>
    <!-- ======= About Section ======= -->
    <section id="about" class="about m-5 ">
        <div class="container">
            <h2>{{ $news_data->title }}</h2>
            <div class="row">
                <div class="col-md-12">
                    <p> <img src="{{ asset('/img/news/'.$news_data->img) }}" alt="" class="news_singleimg" vspace="20">
                    
                    <p class="text-justify">
                        {!!$news_data->news !!}
                    </p>



                </div>


            </div>
            <br />
        </div>
        </div>
    </section><!-- End About Section -->

@endsection
