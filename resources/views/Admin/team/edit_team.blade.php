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
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Member</h4>
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

      <form action="{{ route('update.team', ['id' => $team->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $team->name }}" id="exampleInputName1" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Rank</label>
          <input type="text" class="form-control" name="rank" value="{{ $team->rank }}" id="exampleInputName1" placeholder="Rank" required>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Website</label>
          <input type="text" class="form-control" name="website" id="exampleInputName1" value="{{ $team->website }}" placeholder="Website" required>
        </div>
        <div class="form-group">
          <label>Picture upload</label>
          <input type="file" name="image" class="file-upload-default" required>
          <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value="{{ $team->image }}">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              <small class="form-text text-success">Only if you want to update the current image</small>
            </span>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>

@endsection