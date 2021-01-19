<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="{{ route('admin.home') }}">ILCR</a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}">ILCR</a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{ asset('img/favicon.png') }}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="ti-power-off text-primary"></i>
            {{ __('Logout') }}
        </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html --><nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }} ">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Team</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.team') }}">Team Members</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.team.create') }}">Add Team</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Activities</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.activity') }}"> Activities </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.activity.create') }}">Add Activity</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth2">
              <i class="ti-gallery menu-icon"></i>
              <span class="menu-title">Gallery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.gallery') }}"> Gallery </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.gallery.create') }}">Add Gallery</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth3" aria-expanded="false" aria-controls="auth3">
              <i class="ti-desktop menu-icon"></i>
              <span class="menu-title">News</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.news') }}"> News </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.news.create') }}">Add News</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" ><i class="ti-power-off text-primary" style="padding-right: 20px"> </i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>