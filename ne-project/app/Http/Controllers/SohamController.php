<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SohamController extends Controller
{
    
    public function getSoham(){
        $data=array("a"=>"abcd","b"=>"efgh");
        return view("welcome",compact("data"));
    }


    function reverseOrder():void{

       $string="hello";
       
       for($i=strlen($string)-1; $i>0;$i--){
         echo $i;
       }

        '',"",';',':',"::","^","~",""

    }
}
