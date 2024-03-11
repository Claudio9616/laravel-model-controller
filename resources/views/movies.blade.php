@extends('layouts.layout')
@section('main-content')
<div class="container">
<div class="row row-cols-3">
@foreach ($movies as $movie)
<div class="col text-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
          <p class="card-text">{{$movie->nationality}}</p>
          <p class="card-text">{{$movie->date}}</p>
          <p class="card-text">{{$movie->vote}}</p>
        </div>
    </div>
</div>
@endforeach
</div>
</div>
@endsection