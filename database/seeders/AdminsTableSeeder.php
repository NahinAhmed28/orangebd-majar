<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('admins')->truncate();
        DB::table('admins')->insert(array (
            0 =>
                array (
//                    'id' => 1,
                    'code' => 10,
//                    'username' => 'seed admin',
                    'email' => 'admin'.'@gmail'.'.com',
                    'title_en' => 'title_en',
                    'title_bn' =>'title_bn',
                    'contact' => 'contact',
                    'address_en' => 'address_en',
                    'address_bn' => 'address_bn',
                    'center_id' => 1,
                    'usertype_id' =>1,
                    'status' => 1,
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                ),
        ));
        Schema::enableForeignKeyConstraints();
    }
}
