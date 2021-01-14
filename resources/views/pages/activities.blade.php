@extends('partials.master')

@section('content')
<style>
#header.header-transparent {
    background: rgba(26, 128, 43, 0.9);
}
</style>
<br/>
<br/>
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
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse"
                        href="#faq-list-1">January <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->january !!}
                        </ul>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                        class="collapsed">February <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-parent=".faq-list">

                        <ul class="new_list">
                            {!! $activity_single->february !!}
                        </ul>

                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                        class="collapsed">March <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-parent=".faq-list">

                        <ul class="new_list">
                            {!! $activity_single->march !!}
                        </ul>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                        class="collapsed">April<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->april !!}
                        </ul>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5"
                        class="collapsed">May <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->may !!}
                        </ul>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6"
                        class="collapsed">June<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-6" class="collapse" data-parent=".faq-list">

                        <ul class="new_list">
                            {!! $activity_single->june !!}
                        </ul>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="600">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-7"
                        class="collapsed">July<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->july !!}
                        </ul>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="700">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-8"
                        class="collapsed">August<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->august !!}
                        </ul>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="800">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-9"
                        class="collapsed">September<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->september !!}
                        </ul>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="900">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-10"
                        class="collapsed">October<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->october !!}
                        </ul>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="1000">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-11"
                        class="collapsed">November<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->november !!}
                        </ul>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-12"
                        class="collapsed">December<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                        <ul class="new_list">
                            {!! $activity_single->december !!}
                        </ul>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->

@endsection