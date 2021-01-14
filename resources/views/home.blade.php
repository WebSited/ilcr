@extends('partials.master')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
        <h1>Institute for Land and Community Resilience</h1>
        <h1>(ILCR)</h1>
        <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
</section><!-- End Hero -->

<main id="main">

    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h3 style="text-align: center">ABOUT ILCR</h3>
                    <p style="text-align: justify">
                    <br>
                    Institute for Land and Community Resilience was established to build human and community capacity through formal and 
                    informal education and awareness creation among local communities in Nigeria on land and emergencies related matters. 
                    <br/>
                    <br>
                    Land disputes, land degradations, loss of tenure, climate change actions as a result of low capacity, 
                    poor implementation of polices and low risk awareness and emergency preparedness are major re-occurring issues in 
                    Nigeria and other developing nations.
                    <br/>
                    <a href="{{ route('about') }}" class="btn btn-success text-white"style="margin-top: 5px;">Read More</a>
                    </p>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <img src="{{ asset('img/new_photo1.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Programme Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Our Programmes</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch m-a" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                        </div>
                        <h4 class="pt-3"><a href=""><b>POSTGRADUATE DIPLOMAS</b></a></h4>
                        <ul style="list-style-type: none; font-size: 0.9rem;">
                            <li>PGD in Land Managament</li>
                            <li>PGD in Facility Management</li>
                        </ul>
                        <a href="{{ route('pgd') }}" class="btn btn-success text-white" style="font-size: 0.9rem;">MORE INFO</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange">
                        <h4 class="pt-3"><a href=""><b>  MASTERS DEGREE  </b></a></h4>
                        <ul style="list-style-type: none; font-size: 0.9rem;">
                            <li>M.Tech in Land Managament</li>
                            <li>M.Tech in Facility Management</li>
                        </ul>
                        <a href="{{ route('masters') }}" class="btn btn-success text-white" style="font-size: 0.9rem;">MORE INFO</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <h4 class="pt-3"><a href=""><b>  SHORT TRAININGS  </b></a></h4>
                        <p>Coming Soon</p><br>
                        <!-- <a href="{{ route('training') }}" class="btn btn-success text-white">More Info</a> -->
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End Programme Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Team</h2>
                <p></p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-web"></i></a>
                                <a href=""><i class="icofont-info-circle"></i></a>
                                <a href=""><i class="icofont-phone-circle"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Prof. Kemiki O.A</h4>
                            <span><b>Consultant</b></span>
                            <span>Telephone: <b>0810 798 6162</b></span>
                            <span>Email: <b>isthisokay@gmail.com</b></span>
                            <span>Website: <b>https://hiswebsite.com</b></span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p></p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Room 332, Professorial Wing, School of Environmental Complex <br> Federal University
                                    of Technology Minna, Gidwan-Kwano Campus, <br> Minna, Niger State, Nigeria.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>ilcr@futminna.edu.ng</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+234-7036 411810<br>+234 8022 135691</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert ">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form class="form-horizontal" id="contactform" method="post" action="{{ route('sendmail') }}">
                    @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main><!-- End #main -->

<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

@endsection