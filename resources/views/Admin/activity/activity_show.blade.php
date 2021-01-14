@extends ('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <br>
     <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Admin Dashboard</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title"><strong> {{ $activity_data->year }} Activities</strong></h3>
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>January</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->january !!} </div>
                              </div>
                            </div>
                            <br>

                            <strong><h4>February</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->february !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>March</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->march !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>April</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->april !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>May</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->may !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>June</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->june !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>July</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->july !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>August</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->august !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>September</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->september !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>October</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->october !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>November</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->november !!} </div>
                              </div>
                            </div>
                            <br>
                            <strong><h4>December</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{!! $activity_data->december !!} </div>
                              </div>
                            </div>
                            <br>
                                

                            </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection