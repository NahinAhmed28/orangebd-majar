<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'code' => '1000',
//            'name' => '',
            'email' =>'user'.'@gmail.com',
            'address_en' =>'default address',
            'address_bn' =>'default address',
            'title_bn' =>'default title',
            'title_en' =>'default title',
            'image' =>'default.jpg',
            'password' =>Hash::make('password'),
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        $this->call([

            AssociationTableSeeder::class,
            DivisionsTableSeeder::class,
            DistrictsTableSeeder::class,
            UpazilasTableSeeder::class,
            UserTypesTableSeeder::class,
            CenterTableSeeder::class,
            AdminsTableSeeder::class,


        ]);


        \App\Models\User::factory(1)->create();

    }
}
