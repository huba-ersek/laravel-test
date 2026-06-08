@extends('layout')

@section('content')

@if($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('authors.update', $author->id) }}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="name">Író neve</label>
        <input type="text" name="name" id="name" value="{{ old('name', $author->name) }}">
    </fieldset>
    <fieldset>
        <label for="name">Író születési dátuma</label>
        <input type="date" name="birth_time" id="birth_time" value="{{ old('birth_time', $author->birth_time) }}">
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection