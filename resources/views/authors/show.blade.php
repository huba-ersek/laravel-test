@extends('layout')

@section('content')

<h1>Író részletei</h1>

<p><b>Név: </b>{{ $author->name }}</p>
<p><b>Születési dátum: </b>{{ $author->birth_time }}</p>

@endsection