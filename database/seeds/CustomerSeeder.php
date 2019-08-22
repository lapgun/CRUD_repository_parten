<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->first_name = 'tran van a';
        $customer->last_name = 'asdasda';
        $customer->save();

        $customer = new Customer();
        $customer->first_name = 'tran van a';
        $customer->last_name = 'asdasda';
        $customer->save();

        $customer = new Customer();
        $customer->first_name = 'tran van a';
        $customer->last_name = 'asdasda';
        $customer->save();
    }
}
