<?php
namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    public function getList();

    public function getSelect();

    public function save($data);

    public function update($data, $id);

    public function findId($id);

    public function delete($id);
}
