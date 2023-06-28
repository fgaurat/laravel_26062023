<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todoList = TodoList::factory(5)->create();
        $tags = Tag::factory(5)->create();


        $todoList->each(function($l) use($tags){
            Todo::factory(5)->create(['todo_list_id'=>$l->id])->each(function($todo) use($tags){
                $randomTags = $tags->random(rand(0,4))->pluck('id')->toArray();
                $todo->tags()->attach($randomTags);
            });
        });
    }
}
