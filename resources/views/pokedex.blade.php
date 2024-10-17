@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Pokedex</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($pokemons as $pokemon)
            <div class="col">
                <div class="card">
                    <img src="{{ asset('storage/' . $pokemon->photo) }}" class="card-img-top" alt="{{ $pokemon->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pokemon->name }}</h5>
                        <p class="card-text">
                            <strong>ID:</strong> #{{ str_pad($pokemon->id, 4, '0', STR_PAD_LEFT) }}<br>
                            <strong>Type:</strong> {{ $pokemon->primary_type }}
                        </p>
                        <a href="{{ route('pokemon.show', $pokemon->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center mt-4">
        {{ $pokemons->links() }}
    </div>
</div>
@endsection
