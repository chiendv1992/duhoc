<?php
namespace App\Repositories\Lop;

interface LopRepositoryInterface
{
    public function getAll();

    public function save($data);

    public function updateCustomer($data, $id);

    public function findId($id);

    public function saveCustomer();

    public function deleteCustomer();
}
