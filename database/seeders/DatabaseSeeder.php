<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RoleSeeder::class);
        $this->call(LaratrustSeeder::class);
        \App\Models\User::factory(10)->create();
        \App\Models\Peraturan::factory(10)->create();
        \App\Models\BankSoal::factory(100)->create();
        \App\Models\SesiUjian::factory(5)->create();
    }
}
