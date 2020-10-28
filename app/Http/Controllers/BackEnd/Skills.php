<?php

namespace App\Http\Controllers\Backend;

use App\Models\Skill;

use App\Http\Requests\BackEnd\skills\Store;

class Skills extends BackEndController
{
    public function __construct(Skill $model){

        parent::__construct($model);
      
      
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
       
          
          $this->model->create($request->all());
          
          return redirect()->route("skills.index");
        }
      
      
      
      
         public function update($id,Store $request )
         {
          $row = $this->model->FindOrFail($id);
      
         
          $row->update($request->all());
      
      
      
       
          return redirect()->route("skills.index" );
         
      
        } 
      
      }
