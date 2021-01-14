<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center">

    <!-- <h1 class="logo mr-auto"><a href="">ILCR</a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="index.html" class="logo mr-auto"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('home') }}#about">ABOUT US</a></li>
        <li><a href="{{ route('home') }}#services">PROGRAMMES AND ADMISSION</a></li>
        <li><a href="{{ route('home') }}#team">TEAM</a></li>
        <li class="drop-down"><a href="">CENTERS</a>
          <ul>
            <li class="drop-down"><a href="#">CENTER FOR LAND GOVERNANCE</a>
              <ul>
                <li><a href="{{ route('masters') }}">M. Tech Land Governance</a></li>
                <li><a href="{{ route('pgd') }}">PGD Land Governance</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">CENTER FOR FACILITY MANAGEMENT</a>
              <ul>
                <li><a href="{{ route('masters') }}">M. Tech Facility Management</a></li>
                <li><a href="{{ route('pgd') }}">PGD Facility Management</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="{{ route('home') }}#contact">CONTACT US</a></li>
        <li class="drop-down"><a href="#">ACTIVITIES</a>
          <ul>
            @foreach($single_activity as $row)
            <li><a href="{{ route('show.single.activity', ['id' => $row->id]) }}">{{ $row->year }}</a></li>
            @endforeach
          </ul>
        </li>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
