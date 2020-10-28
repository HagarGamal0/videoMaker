<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BackEnd\Videos;

class Skill extends Model
{
    protected $guarded=[];




    public function videos()
    {
   
     return $this->belongsToMany(Videos::class , 'skills_videos');
     
    }   


}
