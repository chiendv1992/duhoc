<?php
namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $model;

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function getAll(){

    }

    public function save($data){

    }

    public function update($data, $id){

    }

    public function findId($id){

    }

    public function delete($id){

    }
}
