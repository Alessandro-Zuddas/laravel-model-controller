@extends('layouts.main')

@section('page-title')
    Home
@endsection

@section('page-content')

    <div class="ms-main-container container-fluid py-4 px-4">
        <div class="row justify-content-center gy-4">

            @foreach ($movies as $movie)
            
                <div class="col-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text">{{ $movie->date }}</p>
                            <strong class="card-text">{{ $movie->vote }}</strong>
                        </div>
                    </div>
                </div>
    
            @endforeach
    
        </div>
    </div>

@endsection