<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('show', ['song' => $song]);

}





    // public function edit(string $id)
    // {

    //     return view('edit');
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {


    //     return view('edit');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
