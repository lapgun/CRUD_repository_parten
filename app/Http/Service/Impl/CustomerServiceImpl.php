<?php


namespace App\Http\Service\Impl;


use App\Customer;
use App\Http\Repositories\CustomerRepositoryInterface;
use App\Http\Service\CustomerService;
use http\Env\Request;

class CustomerServiceImpl implements CustomerService
{

    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        $customers = $this->customerRepository->getAll();
        return $customers;
    }

    public function findById($id)
    {

        $customer = $this->customerRepository->findById($id);
        return $customer;
    }

    public function create($request)
    {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $this->customerRepository->create($customer);
    }

    public function update($request, $id)
    {
        $customer = $this->customerRepository->findById($id);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $this->customerRepository->update($customer);
    }

    public function destroy($id)
    {
        $customer = $this->customerRepository->findById($id);
        return $this->customerRepository->destroy($customer);
    }
}