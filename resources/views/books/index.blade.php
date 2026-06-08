@extends('layout')

@section('content')

<h1>Könyvek
    <a class="create" href="{{ route('books.create') }}" title="Új könyv hozzáadása"> ➕</a>
</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<ul>
    @foreach ($books as $book)
    <li>
        <b>Cím: </b>{{ $book->title }}
        <br>
        <a href="{{ route('books.show', $book->id) }}">Megjelenítés</a><br>
        <a href="{{ route('books.edit', $book->id) }}">Szerkesztés</a><br>
        <form action="{{ route('books.destroy', $book->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Biztosan akarja törölni?')">Törlés</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection