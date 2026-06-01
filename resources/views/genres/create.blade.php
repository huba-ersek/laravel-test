@extends('layout')

@section('content')

<h1>Új műfaj</h1>

@error('name')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<form action="{{ route('genres.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Műfaj neve</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection