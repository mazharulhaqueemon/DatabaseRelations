<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function artistlist(){
        $artist = Artist::with('song')->get(); 
        return view("artist", compact("artist"));

    }
}
