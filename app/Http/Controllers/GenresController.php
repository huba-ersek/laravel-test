<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ["name" => "required|max:255"],
            [
                "name.max" => "A műfaj neve legfeljebb 255 karakter hosszú legyen.",
                "name.required" => "A műfaj neve kötelező mező."
            ]
        );
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->timestamps = false;
        $genre->save();

        return redirect()->route("genres.index")->with('success', 'Műfaj sikeresen létrehozva');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::find($id);
        return view('genres.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genre::find($id);
        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            ["name" => "required|max:255"],
            [
                "name.max" => "A műfaj neve legfeljebb 255 karakter hosszú legyen.",
                "name.required" => "A műfaj neve kötelező mező."
            ]
        );

        $genre = Genre::find($id);
        $genre->name = $request->name;
        $genre->timestamps = false;
        $genre->save();

        return redirect()->route('genres.index')->with('success', 'Műfaj sikeresen módosítva!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return redirect()->route('genres.index')->with('success', 'Műfaj sikeresen törölve!');
    }
}
