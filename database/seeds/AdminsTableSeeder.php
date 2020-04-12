<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::insert([
           'full_name' => 'Admin',
           'email_address' =>  'admin@admission.com',
           'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
    }
}
