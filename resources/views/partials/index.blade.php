@extends('layout/layout')

@section('title', 'Home')
    
@section('content')

        <div class="row row-cols-4"> 

    @forelse ($movies as $movie)

        {{-- Se l'array contiene qualcosa fai... --}}
            <div class="ms-3 mt-4">
                <div class="col card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <p class="card-text">{{ $movie['description'] }}</p>
                        <a href="#" class="btn btn-primary">Bottone inutile</a>
                    </div>
                </div>
            </div>

    @empty

        {{-- Se l'array è vuoto fai... --}}
        <p>Non ci sono film da mostrare! E' arrivato il momento di abbonarti a Netflix!</p> 

    @endforelse

        </div>
        
@endsection