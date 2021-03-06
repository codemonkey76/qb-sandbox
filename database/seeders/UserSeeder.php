<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use QuickBooksOnline\API\Facades\Customer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        User::create([
            'name' => 'Shane Poppleton',
            'email' => 'shane@bjja.com.au',
            'password' => bcrypt('secret'),
            'email_verified_at' => now()
        ]);
    }
}
