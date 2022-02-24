@extends('layouts.app')

@section('title', 'Edit Movie Info' )

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Movie</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('movies.update',$movie->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        {{-- title  --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="title" value="{{ $movie->title }}" class="form-control" placeholder="Movie Title">
            </div>
        </div>
        {{-- description --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Detail">{{ $movie->description }}</textarea>
            </div>
        </div>
        {{-- release date --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="releasedate" value="{{ $movie->releasedate }}" class="form-control" placeholder="Release Date">
            </div>
        </div>
        {{-- runtime --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="runtime" value="{{ $movie->runtime }}" class="form-control" placeholder="Run Time">
            </div>
        </div>
        {{-- rating --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="rating" value="{{ $movie->rating }}" class="form-control" placeholder="Rating">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>




@endsection
