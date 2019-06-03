<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\GiangVien\EditRequets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRepository;
use App\Http\Requests\GiangVien\AddRequets;

class GiangVienController extends Controller
{
    private $teacher;

    public function __construct(CustomerRepository $teacher)
    {
        $this->teacher = $teacher;
    }

    public function index()
    {
        $giangvien = $this->teacher->getAll($this->teacher::TYPE_TEACHER);

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
        $lops = [
            [
                'id' => 1,
                'name' => 'DH01'
            ],
            [
                'id' => 2,
                'name' => 'DH02'
            ],
            [
                'id' => 3,
                'name' => 'DH03'
            ]
        ];
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
        $this->teacher->save($request);
        return redirect()->route('backend.giangvien.list')->with("success", "Thêm mới giảng viên thành công!");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $giangvien = $this->teacher->findId($id);
//        dd($giangvien);
        return view('backend.giangvien.edit',compact('giangvien'));
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
        $this->teacher->updateCustomer($request, $id);
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
        //
    }
}
