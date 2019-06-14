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

    public function getList(){
        return Category::orderBy('id','DESC')->get()->toArray();
    }

    public function getSelect(){
        return Category::select('id','name','parent_id')->get()->toArray();
    }

    public function save($data){
        $category = new Category();
        $category ->parent_id = $data->parent;
        $category ->name = $data->name;
        $category ->status = $data->status;
        $category ->title = $data->title;
        $category->save();
    }

    public function update($data, $id){
        $cateId = $this->findId($id);
        $cateId ->parent_id = $data->parent;
        $cateId ->name = $data->name;
        $cateId ->status = $data->status;
        $cateId ->title = $data->title;
        $cateId->save();
    }

    public function findId($id){
        return Category::find($id);
    }

    public function delete($id){
        $cateId = $this->findId($id);
        $cates = $this->getList();
//        foreach ($cates as $cate)
//        {
//            if ($cate['parent_id']> 0){
                Category::where('parent_id','=',$cateId['id'])->delete();
//            }
//        }
//        $cateId->delete();
    }
}
