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
                  <h4 class="card-title">Team Members</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Image
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Rank
                          </th>
                          <th>
                            Website
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="{{ asset('admin_assets/images/faces/face1.jpg')}}" alt="image"/>
                          </td>
                          <td>
                            Prof. Kemiki O.A
                          </td>
                          <td>
                            Associate Prof
                          </td>
                          <td>
                            https.//staff.futminna.edu.ng...
                          </td>
                          <td>
                            <a href="#"> Edit |</a><a href="#"> Delete</a>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>

@endsection