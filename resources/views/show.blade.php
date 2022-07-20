@extends('layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Movie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
            </div>
        </div>
    </div>
      
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Title:</strong>
              {{ $movie->title }}
          </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Movie Url:</strong>
              {{ $movie->movie_url }}
          </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Thumbnail:</strong>
              <img src="/images/thumbnails/{{ $movie->thumbnail }}" width="500px">
          </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Description:</strong>
              {{ $movie->description }}
          </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Year:</strong>
              {{ $movie->year }}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Upload Date:</strong>
              {{ $movie->upload_date }}
          </div>
      </div>
</div>
@endsection