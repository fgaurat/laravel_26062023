<?php

namespace App\Console\Commands;

use App\Models\Todo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;


class ScrapeTodos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orsys:scrape-todos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape Todos data from https://jsonplaceholder.typicode.com/todos';

    /**
     * Execute the console command.
     */
    // public function handle()
    // {
    //     $url= "https://jsonplaceholder.typicode.com/todos";
    //     // $response = Http::get($url);
    //     $response = Http::withoutVerifying()->get($url);
    //     $todos =$response->json();

    //     $dataToSave = collect($todos)->map(function($todo){
    //         return[
    //             "title"=>$todo['title'],
    //             "created_at"=>Carbon::now(),
    //             "updated_at"=>Carbon::now(),
    //             "done"=>boolval($todo['completed']),
    //         ];
    //     })->toArray();
    //     // print_r($dataToSave);
    //     Todo::insert($dataToSave);
    // }

    public function handle()
    {
        $url = 'https://jsonplaceholder.typicode.com/todos';
        //$response = Http::get($url);
        $response = Http::withoutVerifying()->get($url);
        print_r($response->json());
        // $todos = $response->json();

        // $dataToSave = collect($todos)->map(function($todo){
        //     return[
        //         "title"=>$todo['title'],
        //     //    "created_at"=>Carbon::now();
        //     //    "updated_at"=>Carbon::now();
        //         "done"=>boolval($todo['completed']),
        //     ];
        // })->Array;

        //print_r($dataToSave);
        //Todo::insert($dataToSave);
    }
}
