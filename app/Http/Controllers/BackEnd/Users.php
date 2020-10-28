<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\BackEnd\users\Store;
use App\Http\Requests\BackEnd\users\Update;
use App\Http\Controllers\BackEnd\BackEndController;


class Users extends BackEndController
{ 

  public function __construct(User $model){

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
  $reqarray=$request->all();

  $reqarray['password'] =Hash::make($reqarray['password']);
    
    $this->model->create($reqarray);
    
    return redirect()->route("users.index");
  }





   public function update($id,Update $request )
   {
    $row = $this->model->FindOrFail($id);

     $reqArray= $request->all();

  if (isset($reqArray['password']) && $reqArray['password'] != " " ) {

    $reqArray['password'] = Hash::make($reqArray['password']);

} else{

  unset($reqArray['password']);
}
    $row->update($reqArray);



 
    return redirect()->route("users.index");
   }



 

  
}



