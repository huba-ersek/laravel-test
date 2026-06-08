@extends('layout')

@section('content')

<h1>Műfajok
    <a href="{{ route('genres.create') }}" title="Új műfaj hozzáadása"> ➕</a>
</h1>

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
            <button type="submit" onclick="return confirm('Biztosan akarja törölni?')">Törlés</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection