@extends('layout')

@section('content')

<h1>Új író</h1>

@if($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('authors.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Író neve</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <fieldset>
        <label for="name">Író születési dátuma</label>
        <input type="date" name="birth_time" id="birth_time">
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection