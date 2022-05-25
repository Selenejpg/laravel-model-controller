@extends('layout.layout')

@section('title', 'film')

@section('content')
    {{-- codice per visualizzare singola card --}}
    <div class="d-flex justify-content-center">
        <div class="d-flex justify-content-center mt-4">
            <div class="col card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="mt-2 card-title">{{ $movie -> title }}</h5>
                    <div class="mt-2 card-text">{{ $movie -> original_title }}</div>
                    <div class="mt-2 card-text">{{ $movie -> nationality }}</div>
                    <div class="mt-2 card-text">{{ $movie -> date }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
