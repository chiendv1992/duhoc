<?php
namespace App\Repositories\Lop;

use App\Models\Lop;
use App\Repositories\BaseRepository;
use PhpParser\Builder\Class_;

class LopRepository extends BaseRepository implements LopRepositoryInterface
{
    protected $model;

    public function __construct(Lop $model){
        parent::__construct($model);
    }

    public function getAll(){
        return Lop::all();
    }

    public function save($data){
        $lop = new Lop();
        $lop->couse_id = $data->course;
        $lop->name = $data->name;
        $lop->status = $data->status;
        $lop->save();
    }

    public function update($data, $id){
        $lopId = $this->findId($id);
        $lopId->couse_id = $data->course;
        $lopId->name = $data->name;
        $lopId->status = $data->status;
        $lopId->save();

    }

    public function findId($id){
        return Lop::find($id);
    }

    public function delete($id){
        $lopId = Lop::find($id);
        $lopId->delete();
    }
}
