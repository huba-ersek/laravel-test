<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvek</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('books.index') }}">Könyvek</a></li>
                <li><a href="{{ route('authors.index') }}">Írók</a></li>
                <li><a href="{{ route('genres.index') }}">Műfajok</a></li>
                <li><a href="{{ route('genres.create') }}">Új műfaj</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <hr>
    <footer>
        © 2026 Érsek Huba
    </footer>
</body>
</html>