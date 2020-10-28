<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use App\Http\Requests\BackEnd\Categories\Store;
use App\Http\Controllers\BackEnd\BackEndController;



class Categories extends BackEndController
{
    public function __construct(Category $model){

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
          
          return redirect()->route("categories.index");
        }
      
      
      
      
         public function update($id,Store $request )
         {
          $row = $this->model->FindOrFail($id);
      
         
          $row->update($request->all());
      
      
      
       
          return redirect()->route("categories.index" );
         
      
}
}
