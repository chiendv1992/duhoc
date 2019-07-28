<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    /**
     * @return mixed
     */
    public function urlcurent();

    /**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = ['*']);

    /**
     * Find data by id
     */
    public function find($id, $columns = ['*']);

    /**
     * @param null $limit
     * @param array $columns
     * @return mixed
     */
    public function paginate($limit = null, $columns = ['*']);

    /**
     * Save a new entity in repository
     */
    public function create(array $input);

    /**
     * @param array $input
     * @param $id
     * @return mixed
     */
    public function update(array $input, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

}
