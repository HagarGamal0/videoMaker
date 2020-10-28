<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use Illuminate\Support\Arr;

class BackEndController extends Controller{

protected $model;

public function __construct(Model $model)
{
  $this->model=$model;
    
}



 public function index() 
{
 
  $rows =  $this->model;
  $rows= $this->fillter($rows);
  $with= $this->with();
  if(!empty($with)){
  $rows= $rows->with($with);
  }
  $rows= $rows->paginate(10);

  $routeName=$this->ClassNameFromModel();
  $mdulename = $this->pluralClass();
  $smdulename= $this->baseeName();
  $pageTitle = "Control " . $mdulename  ;   
  $pagedes =" here you can add / edit / delete " . $mdulename ;

 



  return view('back.'.$this->ClassNameFromModel().'.index' , compact('rows' , 
'mdulename',
'pageTitle',
'pagedes',
'smdulename',
'routeName'




));
}



 public function create()
{
  $mdulename = $this->baseeName();
  $pageTitle =  " Create " . $mdulename ;   
  $pagedes =" Here you can add " . $mdulename ;
  $folderName= $this->ClassNameFromModel();
  $routeName=$folderName;
  $append=$this->append();


 

 return view('back.'. $folderName .'.create' , compact('mdulename',
 'pageTitle',
 'pagedes',
 'folderName', 
 'routeName'

))->with($append);
 

}



 public function edit($id)
{
  $mdulename = $this->baseeName();
 $pageTitle = "Edit " . $mdulename ;   
 $pagedes =" here you can edit " . $mdulename ;
 $folderName= $this->ClassNameFromModel();
 $routeName=$folderName;
 $append=$this->append();


 $row = $this->model->FindOrFail($id);
 return view('back.'. $folderName .'.edit' , compact('row',
 'mdulename',
 'pageTitle',
 'pagedes',
 'folderName',
 'routeName'
))->with($append);

}


 

public function destroy($id)
{
  
  $row = $this->model->FindOrFail($id)->delete();
  return redirect()->route($this->ClassNameFromModel().'.index');


 }





 protected function fillter($rows)
{
return $rows;

}





protected function ClassNameFromModel()
{
 return strtolower($this->pluralClass());
 
  
}

protected function pluralClass()
{
  return str_plural($this->baseeName());


}


protected function baseeName()
{
  return class_basename($this->model);
}


protected function with(){

  return[];
}

protected function append(){

  return[];
}




}




