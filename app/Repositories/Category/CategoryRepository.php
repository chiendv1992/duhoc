<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * @var
     */
    protected $model;

    /**
     * CategoryRepository constructor.
     */
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function getList()
    {
//        return 12;
      return  $this->model->all();
    }
}
