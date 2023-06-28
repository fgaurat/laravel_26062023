<?php

namespace App\Http\Controllers;

use App\Interfaces\RepositoryInterface;
use App\Models\TodoList;
use App\Repositories\TodoListRepository;
use Illuminate\Http\Request;

class TodoListController extends Controller
{

    public function __construct(private RepositoryInterface $todoListRepository){}
    public function index(){
        // $list = TodoList::all();
        $list = $this->todoListRepository->findAll();
        return view('todolist.index',compact('list'));
    }
}
