<?php
namespace App\Repositories\Course;

use App\Models\Course;
use App\Repositories\BaseRepository;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    protected $model;

    public function __construct(Course $model){
        parent::__construct($model);
    }

    public function getAll(){
        return $course = Course::all();
    }

    public function save($data){
        $course = new Course();
        $course->name = $data->name;
        $course->status = $data->status;
        $course->save();
    }

    public function update($data, $id){

        $course = Course::find($id);
        $course->name = $data->name;
        $course->status = $data->status;
        $course->save();
    }

    public function findId($id){
        return Course::find($id)->toArray();
    }

    public function delete($id){
        $course = Course::find($id);
        $course->delete();
    }
}
