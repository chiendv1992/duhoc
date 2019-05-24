<?php
namespace App\Repositories\GiangVien;

use App\Models\Customer;
use App\Repositories\BaseRepository;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class GiangVienRepository extends BaseRepository implements GiangVienRepositoryInterface
{
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

   	public function updateGiangVien($data, $id){

   	}

   	public function findId($id){

   	}

   	public function saveGiangVien(){

   	}

   	public function deleteGiangVien(){

   	}
}
