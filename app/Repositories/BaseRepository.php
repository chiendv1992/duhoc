<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\UrlGenerator;

class BaseRepository implements BaseRepositoryInterface {

    protected $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function urlcurent(){
        return url()->current();
    }
}
