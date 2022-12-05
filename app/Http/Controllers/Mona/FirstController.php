<?php

namespace App\Http\Controllers\Mona;
// use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller;
 
class FirstController extends Controller
{
    public function showName(){
   
          /*   $data=[];
            $data['name']='Mona';
            $data['age']=23;
            $data['gender']='female'; */
  /*           $obj =new \stdClass;
            $obj ->name='name';
            $obj ->age=23;
            $obj ->gender='female'; */

            return view('landing');
     
     


    
}
}