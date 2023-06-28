<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

# HelloController => UpperCamelCase, PascalCase
# helloController => camelCase
# hello_controller => snake_case
# hello-controller => spin-case / train-case / kebab-case
# style.backgroundColor=> background-color

class HelloController extends Controller
{
    public function index($name,Request $request){
        $val01 = $request->input("val01");
        $val02 = $request->input("val02");
        return view('hello8',compact('name',"val01","val02"));
    }
}
// http://localhost:8000/hello10/fred?val01=toto&val02=tutu
