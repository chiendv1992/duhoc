<?php
namespace App\Repositories\Customer;

interface CustomerRepositoryInterface
{
   public function getAll($value);

   public function save($data);

   public function updateCustomer($data, $id);

   public function findId($id);

   public function saveCustomer();

   public function deleteCustomer();
}
