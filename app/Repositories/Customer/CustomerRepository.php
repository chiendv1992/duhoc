<?php
namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Repositories\BaseRepository;
use File;


class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{

    const PATH_IMAGE_CUSTOMER = 'backend/upload/customer';

    protected $model;

    public function __construct(Customer $model){
        parent::__construct($model);
    }

    /**
     * @param $value
     * @return mixed
     * get data  customer
     */
    public function getAll($value){
    	return $tearch = Customer::where('type','=', $value)->get();
    }

    /**
     * @param $data
     */
    public function save($data, $type){
        $file_name ='';
        // lấy tên cua image
        $file_name = time().$data->file('images')->getClientOriginalName();
        // cop ảnh luu vao ht
        $image = $data->file('images')->move(self::PATH_IMAGE_CUSTOMER, $file_name);

        $customer = new Customer();
        $customer->class_id = $data->lop;
        $customer->pass = 1;
        $customer->fullname = $data->name;
        $customer->code = $data->code;
        $customer->address = $data->address;
        $customer->phone = $data->phone;
        $customer->cmtnd = $data->cmtnd;
        $customer->image = $file_name;
        $customer->status = 1;
        $customer->birthday = $data->birthday;
        $customer->type = $type;
        $customer->save();
    }

   	public function updateCustomer($data, $id, $type)
    {
        $customer = Customer::find($id);
        $img_curr=self::PATH_IMAGE_CUSTOMER.$data->input('img_curr');
        if (!empty($data->file('images')))
        {
            $file_name = $data->file('images')->getClientOriginalName();
            $customer->image=$file_name;
            $data->file('images')->move(self::PATH_IMAGE_CUSTOMER,$file_name);
            if (File::exists($img_curr)) {
                File::delete($img_curr);
            }
        }
        else
        {
            $file_name = $data->input('img_curr');
        }

        $customer->class_id = $data->lop;
        $customer->pass = 1;
        $customer->fullname = $data->name;
        $customer->code = $data->code;
        $customer->address = $data->address;
        $customer->phone = $data->phone;
        $customer->cmtnd = $data->cmtnd;
        $customer->image = $file_name;
        $customer->status = 1;
        $customer->birthday = $data->birthday;
        $customer->type = $type;

        $customer->save();
   	}

   	public function findId($id){
        $giangviens = Customer::find($id);
        return $giangviens;

   	}


   	public function deleteCustomer($id){
        $customer = Customer::find($id);
        $customer->delete();
   	}
}
