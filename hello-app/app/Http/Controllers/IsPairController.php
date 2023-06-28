<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IsPairController extends Controller{


    public function index($value){
        $result = $value % 2 ==0;
        return view("is_pair.show",compact("value","result"));
    }



}
