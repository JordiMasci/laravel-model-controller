@extends('home')



@section('listaCard')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            {{ $movie->title }}
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $movie->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    @endsection
