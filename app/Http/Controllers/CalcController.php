<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $calc, $num2)
    {
    switch ($calc){
    case 'addition':
     $result=$num1+$num2;
     break;
     case 'subtraction':
     $result=$num1-$num2;
     break;
     case 'multiplication':
     $result=$num1*$num2;
     break;
     case 'division':
     $result=$num1/$num2;
     break;
     default;
     $result='計算できません';
     break;

    }
    

    return view('calcs.result',['result'=>$result]);
    }
}
