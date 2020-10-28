<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Skill;
use App\Models\Video;
use App\Models\Category;
use App\Http\Requests\BackEnd\Videos\Store;
use App\Http\Controllers\BackEnd\BackEndController;

class Videos extends BackEndController
{
    public function __construct(Video $model){

        parent::__construct($model);
      
      
        }


      protected function with( )
      {
       return ['cat','user'];
      }
         
      protected function append( )
      {  

     $array = [
       'categories'=> Category::get(),
          'skills'=> Skill::get() ,
        'selectedSkills'=> []
        ];

        if(request()->route()->parameter('video')){

           $array['selectedSkills'] = $this->model->find(request()->route()->parameter('video'))
           ->skills()->get()->pluck('id')->toArray();


        }
        return $array;
       }
        
     
         

      
       /* public function fillter($rows)
        {
          if (request()->has('name') && request()->get('name') != "" ) { 
        $rows=$rows->where('name' , request()->get('name'));
       } 
        return $rows;
                        }
        
      */

    


        
    public function store(Store $request)
         {


      /*   $video = new Video;
          $video->name = $request->input('name');
         $video->des = $request->input('des');
         $video->meta_keywords = $request->input('meta_keywords');
         $video->meta_des = $request->input('meta_des');
         $video->youtube = $request->input('youtube');
         $video->published = $request->input('published');
         $video->user_id = auth()->user()->id;
         $video->category_id = $request->input('category_id');
         // $video->image = $request->input('image');
          $video->save();
 
        */  

       
        $reqto = $request->all()+['user_id'=>auth()->user()->id];
       $row = $this->model->create($reqto);
       if (isset($reqto['skills']) && !empty($reqto['skills']) ) {
          $row->skills()->sync($reqto['skills']);
       }
          
          return redirect()->route("videos.index");
        }
      
      
      
      
         public function update($id,Store $request )
         {
          $reqaa= $request->all();
          $row = $this->model->FindOrFail($id);
          $row->update($reqaa);
          if (isset($reqaa['skills']) && !empty($reqaa['skills']) ) {
            $row->skills()->sync($reqaa['skills']);
         }
      

      
          return redirect()->route("videos.index" );
         
      
        }
      
      }
