@extends('layouts.app')

@section('content')

    <ul class="d-flex row gy-5 p-3 w-100 align-items-center ">
     
        @foreach ($movies as $movie)

        <li class="col-4">
            <div class="card _bg-card ">
            <img src={{ $movie->image }} class="card-img-top" alt={{ $movie->title }}>
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <p class="card-text">
                <ul class="list-group">
                    <li class="list-group-item "><span class="fw-bold">Rating:</span> {{ $movie->vote }}/10</li>
                    <li class="list-group-item"><span class="fw-bold">Nation:</span> {{ $movie->nationality }}</li>
                    
                </ul>
              </p>
              <a href="https://www.google.com/search?q={{ $movie->title }}" target="_blank" class="btn btn-primary">Watch Now!</a>
            </div>
          </div>
        </li>
            
        @endforeach
    
    </ul>
@endsection