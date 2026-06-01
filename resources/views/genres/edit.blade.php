@extends('layout')

@section('content')

@error('name')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<form action="{{ route('genres.update', $genre->id) }}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="name">Műfaj neve</label>
        <input type="text" name="name" id="name" value="{{ old('name', $genre->name) }}">
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection