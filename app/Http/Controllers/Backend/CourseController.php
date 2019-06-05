<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\Course\CourseRepository;
use App\Repositories\Course\CourseRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\AddRequest;
use App\Http\Requests\Course\EditRequest;

class CourseController extends Controller
{
    private $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->courseRepository->getAll();
        return view('backend.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.course.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $this->courseRepository->save($request);
        return redirect()->route('backend.course.list')->with("success", "Thêm mới thành công!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courseId = $this->courseRepository->findId($id);
//        dd($courseId);
        return view('backend.course.edit',compact('courseId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
//        dd($request);
        $this->courseRepository->update($request, $id);
        return redirect()->route('backend.course.list')->with("success", "Sửa mới thành công!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->courseRepository->delete($id);
        return redirect()->route('backend.course.list')->with("success", "Xóa thành công!");
    }
}
