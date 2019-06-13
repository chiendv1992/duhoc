<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\HocVien\AddRequets;
use App\Http\Requests\HocVien\EditRequets;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Lop\LopRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HocVienController extends Controller
{

    const TYPE_HOCVIEN = 0;
    private $customerRepository;
    private $lopRepository;

    public function __construct(
        CustomerRepository $customerRepository,
        LopRepository $lopRepository
    )
    {
        $this->customerRepository = $customerRepository;
        $this->lopRepository = $lopRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hocvien = $this->customerRepository->getAll(self::TYPE_HOCVIEN);
        return view('backend.hocvien.index',compact('hocvien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lops = $this->lopRepository->getAll();
        return view('backend.hocvien.add', compact('lops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequets $request)
    {
        $this->customerRepository->save($request, self::TYPE_HOCVIEN);
        return redirect()->route('backend.hocvien.list')->with('success',' Thêm Thành Công');
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
        $lops = $this->lopRepository->getAll();
        $hocVienId = $this->customerRepository->findId($id);
        return view('backend.hocvien.edit', compact('lops', 'hocVienId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequets $request, $id)
    {
        $this->customerRepository->updateCustomer($request, $id, self::TYPE_HOCVIEN);
        return redirect()->route('backend.hocvien.list')->with("success", "Sửa giảng viên thành công!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
