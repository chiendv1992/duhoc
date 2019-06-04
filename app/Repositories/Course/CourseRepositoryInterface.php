<?php
namespace App\Repositories\Course;

interface CourseRepositoryInterface
{
    public function getAll();

    public function save($data);

    public function updateCustomer($data, $id);

    public function findId($id);

    public function saveCustomer();

    public function deleteCustomer();
}
