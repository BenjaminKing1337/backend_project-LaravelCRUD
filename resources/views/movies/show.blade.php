@extends('layouts.app')

@section('title', 'Movie Info' )

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Movie Info</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    {{-- title --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $movie->title }}
        </div>
    </div>
    {{-- description --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {{ $movie->description }}
        </div>
    </div>
    {{-- release date --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Release Date:</strong>
            {{ $movie->releasedate }}
        </div>
    </div>
    {{-- runtime --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Run Time:</strong>
            {{ $movie->runtime }}
        </div>
    </div>
    {{-- rating --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rating:</strong>
            {{ $movie->rating }}
        </div>
    </div>
</div>


@endsection