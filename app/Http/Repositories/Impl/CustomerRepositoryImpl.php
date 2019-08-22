<?php


namespace App\Http\Repositories\Impl;


use App\Customer;
use App\Http\Repositories\CustomerRepositoryInterface;
use App\Http\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepositoryInterface
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}