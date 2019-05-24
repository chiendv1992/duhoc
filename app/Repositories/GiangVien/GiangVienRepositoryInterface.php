<?php
namespace App\Repositories\GiangVien;

interface GiangVienRepositoryInterface
{
   public function getAll($value);

   public function updateGiangVien($data, $id);

   public function findId($id);

   public function saveGiangVien();

   public function deleteGiangVien();
}
