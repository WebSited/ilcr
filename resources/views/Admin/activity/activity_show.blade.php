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
            <h4 class="card-title">{{ $activity_data->year }} Activities</h4>
            <div class="table-responsive">
                <div class="col-md-8">
                    <div class="card">
                            <div class="card-body">
                                
                                <div class="card-body my-3" align="justify"><strong>January: </strong>{{ $activity_data->january }} </div>
                                <div class="card-body my-3"><strong>February </strong>{{ $activity_data->february }} </div>
                                <div class="card-body my-3"><strong>March: </strong>{{ $activity_data->march }} </div>
                                <div class="card-body my-3"><strong>April: </strong>{{ $activity_data->april }} </div>
                                <div class="card-body my-3"><strong>May: </strong>{{ $activity_data->may }} </div>
                                <div class="card-body my-3"><strong>June: </strong>{{ $activity_data->june }} </div>
                                <div class="card-body my-3"><strong>July: </strong>{{ $activity_data->july }}</div>
                                <div class="card-body my-3"><strong>August: </strong>{{ $activity_data->august }} </div> 
                                <div class="card-body my-3"><strong>September: </strong>{{ $activity_data->september }} </div> 
                                <div class="card-body my-3"><strong>October: </strong>{{ $activity_data->october }} </div> 
                                <div class="card-body my-3"><strong>November: </strong>{{ $activity_data->november }} </div> 
                                <div class="card-body my-3"><strong>December: </strong>{{ $activity_data->december }}</div>        		

                            </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection