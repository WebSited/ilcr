@extends('partials.master')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
        <h1>Welcome to the</h1>
        <h1>Institute for Land and Community Resilience</h1>
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
                        Land disputes, land degradations, loss of tenure, climate change actions as a result of low
                        capacity, poor implementation of polices and low risk awareness and emergency preparedness are
                        major re-occurring issues in Nigeria and other developing nations. In view of capacity related
                        challenges including skills and expertise, the Africa Union Member States through the African
                        Union Declaration on Land Issues and Challenges in Africa adopted in 2009 were urged to “build
                        adequate human, financial, technical capacities to support land policy development and
                        implementation through coordinating activities towards strengthening capacities of member
                        universities and research institutions for improved land governance on the continent amongst
                        others. <br><a href="{{ route('about') }}" class="btn btn-success text-white"
                            style="margin-top: 5px;">Read More</a>
                    </p>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <img src="{{ asset('img/about-us.png') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('img/pgd.svg') }}" class="img-fluid" alt="">
                        </div>
                        <h4 class="pt-3"><a href=""><b>POSTGRADUATE DIPLOMAS</b></a></h4>
                        <ul style="list-style-type: none">
                            <li>PGD in Land Governance</li>
                            <li>PGD in Facility Management</li>
                        </ul>
                        <a href="{{ route('pgd') }}" class="btn btn-success text-white">More Info</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <img src="{{ asset('img/masters.svg') }}" class="img-fluid" alt="">
                        </div>
                        <h4 class="pt-3"><a href=""><b>MASTERS DEGREE</b></a></h4>
                        <ul style="list-style-type: none" class="ml-0">
                            <li>M.Tech in Land Governance</li>
                            <li>M.Tech in Facility Management</li>
                        </ul>
                        <a href="{{ route('masters') }}" class="btn btn-success text-white">More Info</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <img src="{{ asset('img/training.svg') }}" class="img-fluid" alt="">
                        </div>
                        <h4 class="pt-3"><a href=""><b>SHORT TRAININGS</b></a></h4>
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
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Prof. Kemiki O.A</h4>
                            <span> <b>Consultant</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>: Dr. (Mrs) N.I. Popoola</h4>
                            <span> <b>Consultant</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Dr. Abdulquadri Ade., Bilau</h4>
                            <span> <b>Consultant</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>MORENIKEJI, Gbenga</h4>
                            <span> <b>Consultant</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Dr. ODUMOSU, Joseph Olayemi </h4>
                            <span><b>Consultant</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ADESINA, Ekundayo A. </h4>
                            <span><b>Rank: </b> Lecturer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ADELEYE, Bamiji Michael</h4>
                            <span> <b>Consultant</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mrs. AKANBI, Memunat Oyiza</h4>
                            <span><b>Rank: </b> Lecturer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Miss. Ikwe, Alice</h4>
                            <span><b>Email: </b> aliceenela@gmail.com</span> <br>
                            <span><b>Mobile Phone: </b> +234 8167 624235</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Mr. Olagunju R.E</h4>
                            <span><b>Email: </b> olagunjureo@gmail.com</span> <br>
                            <span><b>Mobile Phone: </b> +234 8118 550959</span>
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
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
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