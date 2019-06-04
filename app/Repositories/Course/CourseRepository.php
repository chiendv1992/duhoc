<?php
namespace App\Repositories\Course;

use App\Models\Course;
use App\Repositories\BaseRepository;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    public function getAll(){
//        return $course = Course::paginate(10)->get();
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
