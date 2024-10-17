@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pokemon</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pokemon.update', $pokemon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Input fields are the same as create, but with values prefilled -->
        <!-- Copy the form structure from create.blade.php and modify to prefill values using $pokemon data -->
    </form>
</div>
@endsection
