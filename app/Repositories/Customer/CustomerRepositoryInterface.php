<?php
namespace App\Repositories\Customer;

interface CustomerRepositoryInterface
{
   public function getAll($value);

   public function save($data, $type);

   public function updateCustomer($data, $id, $type);

   public function findId($id);

   public function deleteCustomer($id);
}
