@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pokemon Detail</h1>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $pokemon->photo) }}" class="img-fluid rounded-start" alt="{{ $pokemon->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemon->name }}</h5>
                    <p class="card-text"><strong>Species:</strong> {{ $pokemon->species }}</p>
                    <p class="card-text"><strong>Primary Type:</strong> {{ $pokemon->primary_type }}</p>
                    <p class="card-text"><strong>Weight:</strong> {{ $pokemon->weight }}</p>
                    <p class="card-text"><strong>Height:</strong> {{ $pokemon->height }}</p>
                    <p class="card-text"><strong>HP:</strong> {{ $pokemon->hp }}</p>
                    <p class="card-text"><strong>Attack:</strong> {{ $pokemon->attack }}</p>
                    <p class="card-text"><strong>Defense:</strong> {{ $pokemon->defense }}</p>
                    <p class="card-text"><strong>Legendary:</strong> {{ $pokemon->is_legendary ? 'Yes' : 'No' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
