<h1>Új műfaj</h1>

<form action="{{ route('genres.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Műfaj neve</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form>