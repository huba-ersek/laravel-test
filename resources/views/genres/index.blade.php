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
    <li>{{ $genre->id }} - {{ $genre->name }}</li>
    @endforeach
</ul>

@endsection