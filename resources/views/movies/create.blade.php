@extends('movies.layout')
@section('content')
<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="id">id</label>
        <input type="number" class="form-control" id="id" name="id" required>
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" required>
    </div>

    <div class="form-group">
        <label for="release_year">Release Year</label>
        <input type="number" class="form-control" id="release_year" name="release_year" required>
    </div>

    <div class="form-group">
        <label for="poster">Movie Poster</label>
        <input type="file" class="form-control-file" id="poster" name="poster" accept="image/*" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection