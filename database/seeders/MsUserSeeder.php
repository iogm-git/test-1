<?php

namespace Database\Seeders;

use App\Models\ms_user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ms_users = [
            ['USR111', 'ADM-01', 'fd261', 'IT', 'USR111', '2022/11/11 10:10'],
            ['USR002', 'FERDI', 'ecfa2', 'IT', 'USR111', '2022/11/11 10:10'],
            ['USR003', 'NOUVAL', '59d8f', 'IT', 'USR111', '2022/11/11 10:10'],
        ];

        foreach ($ms_users as $value) {
            # code...
            ms_user::create(
                [
                    'user_id' => $value[0],
                    'user_name' => $value[1],
                    'password' => Hash::make($value[2]),
                    'departement' => $value[3],
                    'input_by' => $value[4],
                    'input_date' => $value[5]
                ]
            );
        }
    }
}
