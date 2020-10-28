<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Tag;
use App\Http\Requests\BackEnd\Tags\Store;



class Tags extends BackEndController
{
    public function __construct(Tag $model){

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
          
          return redirect()->route("tags.index");
        }
      
      
      
      
         public function update($id,Store $request )
         {
          $row = $this->model->FindOrFail($id);
      
         
          $row->update($request->all());
      
      
      
       
          return redirect()->route("tags.index" );
         
      
}


}
