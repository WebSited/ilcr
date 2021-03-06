@extends ('admin.layouts.master')
@section('content')

<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-bold mb-0">Admin Dashboard</h4>
        </div> 
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
          <a href="{{ route('admin.team') }} "> <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Team Members</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$team->count()}}</h3>
            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <a href="{{ route('admin.activity') }} ">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Activities</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$activity->count()}}</h3>
            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection