<?php
namespace App\Repositories\Lop;

use App\Models\Lop;
use App\Repositories\BaseRepository;

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

    }

    public function updateCustomer($data, $id){

    }

    public function findId($id){

    }

    public function saveCustomer(){

    }

    public function deleteCustomer(){

    }
}
