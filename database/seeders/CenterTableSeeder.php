<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('centers')->truncate();
        DB::table('centers')->insert(array (
            0 =>
                array (
//                    'id' => 1,
                    'division_id' => 1,
                    'district_id' => 2,
                    'upazila_id' => 3,
                    'association_id' => 1,
                    'code' => 1,
                    'title_en' => 'Barisal',
                    'title_bn' => 'Barisal',
                    'address_en' => 'Barisal',
                    'address_bn' => 'বরিশাল',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2015-11-17 06:01:41',
                    'updated_at' => '2016-02-09 14:06:15',
                ),
        ));
        Schema::enableForeignKeyConstraints();
    }
}
