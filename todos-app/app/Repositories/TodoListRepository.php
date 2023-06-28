<?php
namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Database\Eloquent\Model;

class TodoListRepository implements RepositoryInterface{

    public function findAll(){
        $list = TodoList::all();
        return $list;
    }

    public function save(Model $model){
        $model->save();
    }

    public function findById(int $id){
        return Todo::where('id',$id)->get()->first();
    }

    public function delete(Model $model){
        $model->delete();
    }

}
