<?php
namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface{

    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();
    public function setModel(){
        $this->model=app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }

    public function create($object)
    {
        $this->model=$object;

        $this->model->save();
    }

    public function update( $object)
    {
        $this->model=$object;

        $this->model->save();
    }

    public function destroy($object)
    {
       $this->model=$object;
       $this->model->delete();
    }

}
