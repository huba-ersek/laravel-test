@extends('layout')

@section('content')

<h1>Írók listája
    <a href="{{ route('authors.create') }}" title="Új író hozzáadása"> ➕</a>
</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<ul>
    @foreach ($authors as $author)
    <li>
        <b>Név: </b>{{ $author->name }}
        <br>
        <b>Született: </b>{{ $author->birth_time }}
        <br>
        <a href="{{ route('authors.show', $author->id) }}">Megjelenítés</a><br>
        <a href="{{ route('authors.edit', $author->id) }}">Szerkesztés</a><br>
        <form action="{{ route('authors.destroy', $author->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Biztosan akarja törölni?')">Törlés</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection