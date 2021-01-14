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
      <h4 class="card-title">Edit Activity</h4>
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

      <form action="{{ route('update.activity', ['id' => $activity->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Year</label>
          <input type="text" class="form-control" name="year" value="{{ $activity->year }}" id="exampleInputName1" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputName1">January</label>
          <textarea name="january" id="editor1" rows="10" cols="80">
            {{ $activity->january }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">February</label>
          <textarea name="february" id="editor2" rows="10" cols="80">
            {{ $activity->february }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor2' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">March</label>
          <textarea name="march" id="editor3" rows="10" cols="80">
            {{ $activity->march }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor3' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">April</label>
          <textarea name="april" id="editor4" rows="10" cols="80">
            {{ $activity->april }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor4' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">May</label>
          <textarea name="may" id="editor5" rows="10" cols="80">
            {{ $activity->may }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor5' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">June</label>
          <textarea name="june" id="editor6" rows="10" cols="80">
            {{ $activity->june }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor6' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">July</label>
          <textarea name="july" id="editor7" rows="10" cols="80">
            {{ $activity->july }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor7' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">August</label>
          <textarea name="august" id="editor8" rows="10" cols="80">
            {{ $activity->august }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor8' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">September</label>
          <textarea name="september" id="editor9" rows="10" cols="80">
            {{ $activity->september }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor9' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">October</label>
          <textarea name="october" id="editor10" rows="10" cols="80">
            {{ $activity->october }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor10' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">November</label>
          <textarea name="November" id="editor11" rows="10" cols="80">
            {{ $activity->november }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor11' );
        </script>
        </div>
        <div class="form-group">
          <label for="exampleInputName1">December</label>
          <textarea name="december" id="editor12" rows="10" cols="80">
            {{ $activity->december }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor12' );
        </script>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection