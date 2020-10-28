<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use App\Http\Controllers\BackEnd\BackEndController;






class Home extends BackEndController
{


    public function __construct(User $model){

        parent::__construct($model);
      

    }



    public function index() {

              return view('back.home');
    }
}
