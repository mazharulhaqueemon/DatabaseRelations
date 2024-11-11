<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function artistlist(){
        $artist = Artist::with('song')->get();
        //  show artist table with relation with song table . its a get method for getting data. 
        return view("artist", compact("artist"));

    }

    public function songwithartist(){
        $song = Song::with('artist')->get();
        //  show artist table with relation with song table . its a get method for getting data. 
        return view("song", compact("song"));

    }
}
