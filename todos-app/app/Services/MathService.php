<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class MathService{

    public function __construct(){
        Log::info("MathService __construct");
    }

    public function add(int $a,int $b):int{
        $r = $a+$b;
        return $r;
    }

}
