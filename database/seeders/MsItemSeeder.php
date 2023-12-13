<?php

namespace Database\Seeders;

use App\Models\ms_item;
use Illuminate\Database\Seeder;

class MsItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ms_items = [
            ['ITM011', 'HYGET', 'KAIN', 'USR111', '2022/11/11 10:10'],
            ['ITM002', 'BABY TERRY', 'KAIN', 'USR002', '2022/11/11 10:10'],
            ['ITM003', 'WOFEN', 'RIB', 'USR003', '2022/11/11 10:10'],
        ];

        foreach ($ms_items as $key => $value) {
            # code...
            ms_item::create([
                'item_id' => $value[0],
                'item_name' => $value[1],
                'category' => $value[2],
                'input_by' => $value[3],
                'input_date' => $value[4]
            ]);
        }
    }
}
