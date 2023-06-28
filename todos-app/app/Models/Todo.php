<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function todoList(){
        return $this->belongsTo(TodoList::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,"tags_todos");

    }
}
