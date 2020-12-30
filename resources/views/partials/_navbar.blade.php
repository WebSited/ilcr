<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="">ILCR</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#services">Programmes & Admission</a></li>
        {{--  <li><a href="#admission">Admission</a></li>  --}}
        <li class="drop-down"><a href="">Centres</a>
          <ul>
            <li class="drop-down"><a href="#">Centre for Land Governance</a>
              <ul>
<<<<<<< Updated upstream
                <li><a href="#">M. Tech Land Governance</a></li>
                <li><a href="#">PGD Land Governance</a></li>
=======
                <li><a href="{{ route('masters') }}">M. Tech Land Management</a></li>
                <li><a href="{{ route('pgd') }}">PGD Land Management</a></li>
>>>>>>> Stashed changes
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#contact">Contact Us</a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
