<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\GiangVien\EditRequets;
use App\Repositories\Lop\LopRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Http\Requests\GiangVien\AddRequets;


class GiangVienController extends Controller
{

    const TYPE_TEACHER = 1;
    private $teacher;

    private $lopRepository;

    public function __construct(
        CustomerRepository $teacher,
        LopRepository $lopRepository)
    {
        $this->teacher = $teacher;
        $this->lopRepository = $lopRepository;
    }

    public function index()
    {
        $giangvien = $this->teacher->getAll(self::TYPE_TEACHER);

        return view('backend.giangvien.index', [
            'giangvien' => $giangvien
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lops = $this->lopRepository->getAll();
        return view('backend.giangvien.add', [
            'lops' => $lops
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequets $request)
    {
        $this->teacher->save($request, self::TYPE_TEACHER);
        return redirect()->route('backend.giangvien.list')->with("success", "Thêm mới giảng viên thành công!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lops = $this->lopRepository->getAll();
        $giangvienId = $this->teacher->findId($id);
        return view('backend.giangvien.edit',compact('giangvienId','lops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequets $request, $id)
    {
        $this->teacher->updateCustomer($request, $id, self::TYPE_TEACHER);
        return redirect()->route('backend.giangvien.list')->with("success", "Sửa giảng viên thành công!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teacher->deleteCustomer($id);
        return redirect()->route('backend.giangvien.list')->with("success", "Xóa giảng viên thành công!");

    }
}
