<?php
namespace App\Repositories\Lop;

interface LopRepositoryInterface
{
    public function getAll();

    public function save($data);

    public function update($data, $id);

    public function findId($id);

    public function delete($id);
}
