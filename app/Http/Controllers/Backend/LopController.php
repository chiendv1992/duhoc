<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Lop\AddRequest;
use App\Http\Requests\Lop\EditRequest;
use App\Repositories\Course\CourseRepository;
use App\Repositories\Lop\LopRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LopController extends Controller
{
    private $lopRepository;
    private $courseRepository;

    public function __construct(
        LopRepository $lopRepository,
        CourseRepository $courseRepository
    )
    {
        $this->lopRepository = $lopRepository;
        $this->courseRepository = $courseRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lops = $this->lopRepository->getAll();
        return view('backend.lop.index', compact('lops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = $this->courseRepository->getAll();
        return view('backend.lop.add',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        $this->lopRepository->save($request);
        return redirect()->route('backend.lop.list')->with('success','Thêm Thành Công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = $this->courseRepository->getAll();
        $lopId = $this->lopRepository->findId($id);
        return view('backend.lop.edit',compact('lopId','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        $this->lopRepository->update($request, $id);
        return redirect()->route('backend.lop.list')->with('success','Sửa Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->lopRepository->delete($id);
        return redirect()->route('backend.lop.list')->with('success','Xóa Thành Công');
    }
}
