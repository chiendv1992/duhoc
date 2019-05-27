<?php
namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Repositories\BaseRepository;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    const TYPE_TEACHER = 1;
    const TYPE_HOCVIEN = 0;
    protected $customer;

    public function __construct()
    {
        $this->customer = new Customer();
        parent::__construct($this->customer);
    }

    /**
     * @param $value
     * @return mixed
     * get data  customer
     */
    public function getAll($value){
    	return $tearch = $this->customer->where('type','=', $value)->get();
    }

    public function save($data){
        $customer = new Customer();
        $customer->class_id = 1;
        $customer->pass = 1;
        $customer->fullname = $data->name;
        $customer->code = $data->code;
        $customer->address = $data->address;
        $customer->phone = $data->phone;
        $customer->cmtnd = $data->cmtnd;
        $customer->image = 1;
        $customer->status = 1;
        $customer->birthday = $data->ngaysinh;
        $customer->type = self::TYPE_TEACHER;
        $customer->save();
    }

   	public function updateCustomer($data, $id){

   	}

   	public function findId($id){

   	}

   	public function saveCustomer(){

   	}

   	public function deleteCustomer(){

   	}
}
