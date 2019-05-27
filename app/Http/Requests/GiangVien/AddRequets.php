<?php

namespace App\Http\Requests\GiangVien;

use Illuminate\Foundation\Http\FormRequest;

class AddRequets extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|unique:customer',
            'name' => 'required',
            'ngaysinh' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'cmtnd' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'Bạn chưa nhập mã',
            'code.unique' => 'Mã đã tồn tại',
            'name.required' => 'Bạn chưa nhập Họ Tên',
            'ngaysinh.required' => 'Bạn chưa nhập Ngày sinh',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.numeric' => 'Bạn chỉ được nhập số 0-9',
            'cmtnd.required' => 'Bạn chưa nhập mã chứng minh',
        ];
    }
}
