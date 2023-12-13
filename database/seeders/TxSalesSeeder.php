<?php

namespace Database\Seeders;

use App\Models\tx_sales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TxSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tx_sales = [
            ['INV-2211-A0031-0011', 'POS-00011', 'CUST011', 'SLM0011', 'USR111', '2022/11/01 10:10'],
            ['INV-2211-A0031-0002', 'POS-00002', 'CUST011', 'SLM0002', 'USR002', '2022/11/02 10:10'],
            ['INV-2211-A0031-0003', 'POS-00003', 'CUST002', 'SLM0003', 'USR003', '2022/11/03 10:10'],
            ['INV-2211-A0031-0004', 'POS-00004', 'CUST011', 'SLM0003', 'USR002', '2022/11/05 10:10'],
            ['INV-2211-A0031-0005', 'POS-00005', 'CUST003', 'SLM0011', 'USR003', '2022/11/05 10:10'],
            ['INV-2211-A0031-0006', 'POS-00006', 'CUST003', 'SLM0002', 'USR002', '2022/11/06 10:10'],
            ['INV-2211-A0031-0007', 'POS-00007', 'CUST002', 'SLM0011', 'USR003', '2022/11/07 10:10'],
        ];

        foreach ($tx_sales as $key => $value) {
            # code...
            tx_sales::create([
                'sales_id' => $value[0],
                'sales_no' => $value[1],
                'customer_id' => $value[2],
                'salesman_id' => $value[3],
                'create_by' => $value[4],
                'input_date' => $value[5]
            ]);
        }
    }
}
