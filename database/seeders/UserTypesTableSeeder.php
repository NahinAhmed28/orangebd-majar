<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('user_types')->truncate();
        DB::table('user_types')->insert(array(

            0 =>
                array(
                    'id' => 1,
                    'sort' => '1',
                    'code' => '1',
                    'name' => 'Master Admin',
                    'title_en' => 'Master Admin',
                    'title_bn' => 'মাস্টার এডমিন',
                    'status' => 1,
                    'default_role' => 1,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ),
            1 =>
                array(
                    'id' => 2,
                    'sort' => '2',
                    'code' => '2',
                    'name' => 'System Admin',
                    'title_en' => 'System Admin',
                    'title_bn' => 'সিস্টেম অ্যাডমিন',
                    'status' => 1,
                    'default_role' => 2,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ),
            2 =>
                array(
                    'id' => 3,
                    'sort' => '3',
                    'code' => '3',
                    'name' => 'Admin',
                    'title_en' => 'Admin',
                    'title_bn' => 'অ্যাডমিন',
                    'status' => 1,
                    'default_role' => 3,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ),
             3 =>
                 array(
                     'id' => 4,
                     'sort' => '4',
                     'code' => '4',
                     'name' => 'Manager',
                     'title_en' => 'Manager',
                     'title_bn' => 'ম্যানেজার',
                     'status' => 1,
                     'default_role' => 4,
                     'created_at' => NOW(),
                     'updated_at' => NOW(),
                 ),
             4 =>
                 array(
                     'id' => 5,
                     'sort' => '5',
                     'code' => '5',
                     'name' => 'Operator',
                     'title_en' => 'Operator',
                     'title_bn' => 'অপারেটর',
                     'status' => 1,
                     'default_role' => 5,
                     'created_at' => NOW(),
                     'updated_at' => NOW(),
                 ),
        ));


        Schema::enableForeignKeyConstraints();
    }
}
