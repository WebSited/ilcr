@extends('partials.master')

@section('content')
    <style>
        #header.header-transparent {
            background: rgba(26, 128, 43, 0.9);
        }

    </style>
    <br />
    <br />
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>{{ $activity_single->year }} Activities</h2>
                <p><br><br></p>

            </div>
            {!! $activity_single->acts !!}

        </div>
    </section><!-- End Frequently Asked Questions Section -->

@endsection
