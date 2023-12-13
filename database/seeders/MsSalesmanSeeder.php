<?php

namespace Database\Seeders;

use App\Models\ms_salesman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MsSalesmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ms_salesmans = [
            ['SLM0011', 'KANIA', 'JAKARTA', 'USR111', '2022/11/11 10:10'],
            ['SLM0002', 'DARA', 'JAKARTA', 'USR003', '2022/11/11 10:10'],
            ['SLM0003', 'UZI', 'JAKARTA', 'USR002', '2022/11/11 10:10'],
        ];

        foreach ($ms_salesmans as $key => $value) {
            # code...
            ms_salesman::create([
                'salesman_id' => $value[0],
                'sales_person' => $value[1],
                'alamat' => $value[2],
                'input_by' => $value[3],
                'input_date' => $value[4]
            ]);
        }
    }
}
