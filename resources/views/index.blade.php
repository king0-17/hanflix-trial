@extends('layout.layoutMovie')

@section('content')
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hanflix | Watch Movie for free | Livestream</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success"> Create New Movie</a>
            </div>
        </div>
    </div>

    <!-- @if ($message = Session::get('success')) -->
        <div class="alert alert-success">
            <p></p>
        </div>
    <!-- @endif -->
   
    <table class="table table-bordered">
        <tr>
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Movie Url</th>
            <th>Description</th>
            <th>Language</th>
            <th>Year</th>
            <th>Upload Date</th>
            <th width="280px">Action</th>
        </tr>

        <!-- @foreach ($movies as $movie) -->
        <tr>

            <td><img src="/images/thumbnails/{{ $movie->thumbnail }}" width="100px"></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <!-- <td>{{ $movie->title }}</td>
            <td>{{ $movie->movie_url }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->language }}</td>
            <td>{{ $movie->year }}</td>
            <td>{{ $movie->upload_date }}</td> -->
            <td>
                <form method="POST">
                    <a class="btn btn-info">Show</a>
                    <a class="btn btn-primary">Edit</a>
                    @csrf

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
   

    </table>


@endsection