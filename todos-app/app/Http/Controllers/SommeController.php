<?php

namespace App\Http\Controllers;

use App\Services\MathService;
use Illuminate\Http\Request;

class SommeController extends Controller
{
    // private $mathService;

    // public function __construct(MathService $mathService){
    //     $this->mathService = $mathService;
    // }

    public function __construct(private MathService $mathService){}


    public function index(){
        $r = $this->mathService->add(2,3);
        return "SommeController index $r";
    }

    public function index2(){
        $r = $this->mathService->add(2,3);
        return "SommeController index $r";
    }
}
