<?php

namespace App\Http\Requests\Lop;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'name' => 'required|unique:class',
            'course' => 'required',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn Chưa Nhập Tên  Lớp',
            'name.unique' => 'Tên  Lớp Đã Tồn Tại',
             'course.required' => 'Bạn Chưa chọn Khóa Học',
            'status.required' => 'Bạn Chưa Chọn Trạng Thái'
        ];
    }
}
