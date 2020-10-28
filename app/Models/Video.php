<?php

namespace App\Models;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $fillable=[

      'name',
      'des' ,  
      'meta_keywords' , 
      'meta_des' ,
      'youtube'       ,
      'published' ,
      'category_id',
      'user_id',





    ];




 
    
 public function user()
 {
 return $this->belongsTo(User::class , 'user_id');
  
 }   

 
 public function cat()
 {
  return $this->belongsTo(Category::class , 'category_id');

 }   

 public function skills()
 {

  return $this->belongsToMany(Skill::class , 'skills_videos');
  
 }   
} 
