<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface{
    public function findAll();
    public function save(Model $model);
    public function findById(int $id);
    public function delete(Model $model);

}

