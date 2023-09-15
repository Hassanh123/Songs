<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Exception;

class SongController extends Controller
{
    
    public function index()
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];

        return view('index', compact('songs'));
    }

  
    public function create()
    {
        return view("create");
        
    }

 
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        if (isset($songs[$id])) {
            $song = $songs[$id];
            return view('show', compact('song'));
        } else {
            throw new Exception('Song is niet toegevoegd');
        }
 
       return view('show');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        // $song = Song::find($id); 
        // $song->title = $request->input('title'); 
        // $song->save();
        return view('edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
