<?php

namespace Database\Seeders;

use App\Models\tx_sub_sales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TxSubSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tx_sub_sales = [
            ['INV-2211-A0031-0011', 'ITM011', 3, 50000],
            ['INV-2211-A0031-0011', 'ITM002', 2, 8000],
            ['INV-2211-A0031-0002', 'ITM011', 60, 100],
            ['INV-2211-A0031-0003', 'ITM003', 1, 511000],
            ['INV-2211-A0031-0004', 'ITM002', 1, 3000],
            ['INV-2211-A0031-0005', 'ITM011', 1, 1000],
            ['INV-2211-A0031-0006', 'ITM003', 110, 70000],
            ['INV-2211-A0031-0007', 'ITM011', 260, 61000],
            ['INV-2211-A0031-0007', 'ITM002', 110, 88000],
        ];

        foreach ($tx_sub_sales as $key => $value) {
            # code...
            tx_sub_sales::create([
                'sales_id' => $value[0],
                'item_id' => $value[1],
                'qty_sales' => $value[2],
                'unit_price' => $value[3]
            ]);
        }
    }
}
