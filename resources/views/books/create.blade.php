@extends('layout')

@section('content')

<h1>Új könyv</h1>

@if($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="author_id">Író</label>
        <select name="author_id" id="author_id">
            @foreach ($authors as $author)
            <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="title">Cím</label>
        <input type="text" name="title" id="title">
    </fieldset>
    <fieldset>
        <label for="genre_id">Műfaj</label>
        <select name="genre_id" id="genre_id">
            @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="year">Kiadás éve</label>
        <input type="number" name="year" id="year" step="1">
    </fieldset>
    <fieldset>
        <label for="description">Leírás</label>
        <textarea name="description" id="description"></textarea>
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection