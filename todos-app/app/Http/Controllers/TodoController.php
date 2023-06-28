<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    public function index(){
        if (! Gate::allows('is-admin')) {
            abort(403);
        }

        $todos = Todo::all();
        return view('todo.index',compact('todos'));

    }

    public function show(Todo $todo){

        return view('todo.show',compact('todo'));
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect()->route("todo.index")->withSuccess('Todo deleted !');

    }

    public function create(Request $request){
        if(request()->isMethod('post')){
            $r = $request->validate([
                'todoTitle'=>['required']
            ]);

            $todoTags = explode(",",$request->todoTags);

            collect($todoTags)->each(function($tag){
                Tag::updateOrCreate(['name'=>$tag],['name'=>$tag]);
            });


            $tagIds = Tag::whereIn('name',$todoTags)->pluck('id')->toArray();


            $isDone = $request->has('todoDone')?"ok":"ko";
            $todo = new Todo();
            $todo->title = $request->todoTitle;
            $todo->done = $request->has('todoDone');
            $todo->todo_list_id =1;
            $todo->save();

            $todo->tags()->attach($tagIds);


            //Todo::create(['title'=>""])
            return redirect()->route("todo.index")->withSuccess('Todo Created !');
        }
        else{
            return view('todo.create');
        }

    }

}
