<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Category\AddRequets;
use App\Repositories\Category\CategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $cateRepository;

    public function __construct(CategoryRepository $cateRepository){
        $this->cateRepository = $cateRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = $this->cateRepository->getList();
        return view('backend.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = $this->cateRepository->getSelect();
        return view('backend.category.add',compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequets $request)
    {
        $this->cateRepository->save($request);
        return redirect()->route('backend.category.list')->with('success','Thêm Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent = $this->cateRepository->getSelect();
        $category_id = $this->cateRepository->findId($id);
        return view('backend.category.edit',compact('category_id','parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->cateRepository->update($request, $id);
        return redirect()->route('backend.category.list')->with('success','Sửa Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cateRepository->delete($id);
        return redirect()->route('backend.category.list')->with('success','Xóa Thành Công');
    }
}
