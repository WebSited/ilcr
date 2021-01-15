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
                <p></p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class=""></i> <a data-toggle="collapse" class="collapse"
                            href="#faq-list-1">Activities <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                            <ul class="new_list">
                                {!! $activity_single->acts !!}
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

@endsection
