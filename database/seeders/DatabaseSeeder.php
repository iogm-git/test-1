<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MsUserSeeder::class,
            MsItemSeeder::class,
            MsSalesmanSeeder::class,
            MsCustomerSeeder::class,
            TxSalesSeeder::class,
            TxSubSalesSeeder::class
        ]);
    }
}
