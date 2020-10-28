<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Page;
use App\Http\Requests\BackEnd\Pages\Store;
use App\Http\Controllers\BackEnd\BackEndController;

class Pages extends BackEndController
{
    public function __construct(Page $model){

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
          
          return redirect()->route("pages.index");
        }
      
      
      
      
         public function update($id,Store $request )
         {
          $row = $this->model->FindOrFail($id);
      
         
          $row->update($request->all());
      
      
      
       
          return redirect()->route("pages.index" );
         
      
        } 
      }
