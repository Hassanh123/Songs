<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Song;

use Exception;

class SongController extends Controller

{

    public function index()
    {
        $songs = Song::all();
        return view('index', ['songs' => $songs]);
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {

        $newsong = $request->validate([
            'title' => 'required|max:255',
            'singer' => 'required|max:255',
        ]);

        Song::create($newsong);

        return redirect('/index');
    }


    public function show($id)
    {

        $song = Song::find($id);
        return view('show', compact('song'));
    }



    public function edit($id)
    {
        $song = Song::find($id);

        if (!$song) {
            return redirect()->route('songs.index')->with('error', 'Liedje niet gevonden.');
        }
        $songs = Song::all();

        return view('edit', ['song' => $song, 'songs' => $songs]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'singer' => 'required|max:255',
        ]);

        $song = Song::find($id);

        if (!$song) {
            return redirect()->route('songs.index')->with('error', 'Liedje niet gevonden.');
        }

        $song->update([
            'title' => $validatedData['title'],
            'singer' => $validatedData['singer'],
        ]);

        return redirect()->route('songs.index')->with('success', 'Liedje is bijgewerkt.');
    }


    public function destroy($id)
    {
        $song = Song::find($id);

        if (!$song) {
            return redirect()->route('songs.index')->with('error', 'Liedje niet gevonden.');
        }

        $song->delete();

        return redirect()->route('songs.index')->with('success', 'Liedje is verwijderd.');
    }
}
