@extends('layout/layout')

@section('title', 'Home')
    
@section('content')

        <div class="row row-cols-3"> 

    @forelse ($movies as $key => $movie)

        {{-- Se l'array contiene qualcosa fai... --}}
            <div class="d-flex justify-content-center mt-4">
                <div class="col card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie -> title }}</h5>
                        <p class="card-text">{{ $movie -> date }}</p>
                        <a href="{{route('movie', ['id' => $key + 1])}}" class="btn btn-primary">Info del film</a>
                    </div>
                </div>
            </div>

    @empty

        {{-- Se l'array è vuoto fai... --}}
        <p>Non ci sono film da mostrare! E' arrivato il momento di abbonarti a Netflix!</p> 

    @endforelse

        </div>
        
@endsection