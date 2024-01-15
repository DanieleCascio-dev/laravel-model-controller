@extends('layouts.app')

@section('content')
    <h1>Films</h1>
    <ul class="d-flex row gy-5">
     
        @foreach ($movies as $movie)

        <li class="col-4">
            <div class="card" style="width: 18rem;">
            <img src={{ $movie->image }} class="card-img-top" alt={{ $movie->title }}>
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <p class="card-text">
                <ul class="list-group">
                    <li class="list-group-item">Rating: {{ $movie->vote }}/10</li>
                    <li class="list-group-item">Nation: {{ $movie->nationality }}</li>
                    
                </ul>
              </p>
              <a href="https://www.google.com/search?q={{ $movie->title }}" target="_blank" class="btn btn-primary">Watch Now!</a>
            </div>
          </div>
        </li>
            
        @endforeach
    
    </ul>
@endsection