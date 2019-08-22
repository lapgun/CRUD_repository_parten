<?php

namespace App\Http\Controllers;

use App\Http\Service\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $cutomerService;
    public function __construct(CustomerService $customerService)
    {
        $this->cutomerService=$customerService;
    }
    public function index(){
        $customers = $this->cutomerService->getAll();
        return view('index',compact('customers'));

    }
    public function showById($id){
        $customer = $this->cutomerService->findById($id);
        return view('show',compact('customer'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $this->cutomerService->create($request);
        return redirect()->route('index');
    }
    public function edit($id){
        $customer = $this->cutomerService->findById($id);
//        dd($customer);
        return view('edit',compact('customer'));

    }
    public function update(Request $request,$id){
        $this->cutomerService->update($request,$id);
        return redirect()->route('index');
    }
    public function delete($id){
        $this->cutomerService->destroy($id);
        return redirect()->route('index');
    }
}
