@extends('layout.layout')

@section('title', 'film')

@section('content')
    {{-- codice per visualizzare singola card --}}
    <div class="d-flex justify-content-center">
        <div class="ms-3 mt-4">
            <div class="col card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <p class="card-text">{{ $movie['description'] }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
