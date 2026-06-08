@extends('layout')

@section('content')

<h1>Könyv részletei</h1>

<p><b>Író: </b>{{ $book->author->name }}</p>
<p><b>Cím: </b>{{ $book->title }}</p>
<p><b>Műfaj: </b>{{ $book->genre->name }}</p>
<p><b>Kiadás éve: </b>{{ $book->year }}</p>
<p><b>Leírás: </b>{{ $book->description }}</p>

@endsection