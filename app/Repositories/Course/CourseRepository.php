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

    /**
     * @return Course[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll(){
        return $course = Course::all();
    }

    /**
     * @param $data
     */
    public function save($data){
        $course = new Course();
        $course->name = $data->name;
        $course->status = $data->status;
        $course->save();
    }

    /**
     * @param $data
     * @param $id
     */
    public function update($data, $id){

        $course = Course::find($id);
        $course->name = $data->name;
        $course->status = $data->status;
        $course->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findId($id){
        return Course::find($id)->toArray();
    }

    /**
     * @param $id
     */
    public function delete($id){
        $course = Course::find($id);
        $course->delete();
    }
}
