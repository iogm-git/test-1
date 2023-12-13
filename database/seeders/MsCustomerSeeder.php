<?php

namespace Database\Seeders;

use App\Models\ms_customer;
use Illuminate\Database\Seeder;

class MsCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ms_customer = [
            ['CUST011', 'HAPSAH', 'JAKARTA', 'HPS', 'USR002', '2022/11/11 10:10'],
            ['CUST002', 'TELLA', 'JAKARTA', 'TL', 'USR002', '2022/11/11 10:10'],
            ['CUST003', 'DINI', 'JAKARTA', 'DN', 'USR002', '2022/11/11 10:10'],
        ];

        foreach ($ms_customer as $key => $value) {
            # code...
            ms_customer::create([
                'customer_id' => $value[0],
                'customer_name' => $value[1],
                'address' => $value[2],
                'nick_name' => $value[3],
                'input_by' => $value[4],
                'input_date' => $value[5]
            ]);
        }
    }
}
