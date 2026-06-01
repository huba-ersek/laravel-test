@extends('layout')

@section('content')

<h1>Műfajok</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<ul>
    @foreach($genres as $genre)
    <li>
        {{ $genre->name }}
        <br>
        <a href="{{ route('genres.show', $genre->id) }}">Megjelenítés</a><br>
        <a href="{{ route('genres.edit', $genre->id) }}">Szerkesztés</a><br>
        <form action="{{ route('genres.destroy', $genre->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Törlés</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection