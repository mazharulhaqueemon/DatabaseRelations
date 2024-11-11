<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
   public function song(){
    return $this->hasMany(Song::class,'artist_id');
   }
}
