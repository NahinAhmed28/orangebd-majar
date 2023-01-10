<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('districts')->truncate();

        DB::table('districts')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'division_id' => 1,
                    'division_bbs_code' => '10',
                    'title_en' => 'BARGUNA',
                    'title_bn' => 'বরগুনা',
                    'bbs_code' => '04',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            1 =>
                array (
                    'id' => 2,
                    'division_id' => 1,
                    'division_bbs_code' => '10',
                    'title_en' => 'BARISAL',
                    'title_bn' => 'বরিশাল',
                    'bbs_code' => '06',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            2 =>
                array (
                    'id' => 3,
                    'division_id' => 1,
                    'division_bbs_code' => '10',
                    'title_en' => 'BHOLA',
                    'title_bn' => 'ভোলা',
                    'bbs_code' => '09',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            3 =>
                array (
                    'id' => 4,
                    'division_id' => 1,
                    'division_bbs_code' => '10',
                    'title_en' => 'JHALOKATI',
                    'title_bn' => 'ঝালকাঠি',
                    'bbs_code' => '42',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            4 =>
                array (
                    'id' => 5,
                    'division_id' => 1,
                    'division_bbs_code' => '10',
                    'title_en' => 'PATUAKHALI',
                    'title_bn' => 'পটুয়াখালী ',
                    'bbs_code' => '78',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            5 =>
                array (
                    'id' => 6,
                    'division_id' => 1,
                    'division_bbs_code' => '10',
                    'title_en' => 'PIROJPUR',
                    'title_bn' => 'পিরোজপুর ',
                    'bbs_code' => '79',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            6 =>
                array (
                    'id' => 7,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'BANDARBAN',
                    'title_bn' => 'বান্দরবান',
                    'bbs_code' => '03',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            7 =>
                array (
                    'id' => 8,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'BRAHMANBARIA',
                    'title_bn' => 'ব্রাহ্মণবাড়িয়া',
                    'bbs_code' => '12',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            8 =>
                array (
                    'id' => 9,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'CHANDPUR',
                    'title_bn' => 'চাঁদপুর',
                    'bbs_code' => '13',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            9 =>
                array (
                    'id' => 10,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'CHITTAGONG',
                    'title_bn' => 'চট্টগ্রাম',
                    'bbs_code' => '15',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            10 =>
                array (
                    'id' => 11,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'COMILLA',
                    'title_bn' => 'কুমিল্লা',
                    'bbs_code' => '19',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            11 =>
                array (
                    'id' => 12,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'COX\'S BAZAR',
                    'title_bn' => 'কক্সবাজার ',
                    'bbs_code' => '22',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            12 =>
                array (
                    'id' => 13,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'FENI',
                    'title_bn' => 'ফেনী',
                    'bbs_code' => '30',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            13 =>
                array (
                    'id' => 14,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'KHAGRACHHARI',
                    'title_bn' => 'খাগড়াছড়ি',
                    'bbs_code' => '46',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            14 =>
                array (
                    'id' => 15,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'LAKSHMIPUR',
                    'title_bn' => 'লক্ষ্মীপুর',
                    'bbs_code' => '51',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            15 =>
                array (
                    'id' => 16,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'NOAKHALI',
                    'title_bn' => 'নোয়াখালী',
                    'bbs_code' => '75',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            16 =>
                array (
                    'id' => 17,
                    'division_id' => 2,
                    'division_bbs_code' => '20',
                    'title_en' => 'RANGAMATI',
                    'title_bn' => 'রাঙ্গামাটি',
                    'bbs_code' => '84',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            17 =>
                array (
                    'id' => 18,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'DHAKA',
                    'title_bn' => 'ঢাকা ',
                    'bbs_code' => '26',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            18 =>
                array (
                    'id' => 19,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'FARIDPUR',
                    'title_bn' => 'ফরিদপুর ',
                    'bbs_code' => '29',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            19 =>
                array (
                    'id' => 20,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'GAZIPUR',
                    'title_bn' => 'গাজীপুর ',
                    'bbs_code' => '33',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            20 =>
                array (
                    'id' => 21,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'GOPALGANJ',
                    'title_bn' => 'গোপালগঞ্জ',
                    'bbs_code' => '35',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            21 =>
                array (
                    'id' => 22,
                    'division_id' => 9,
                    'division_bbs_code' => '45',
                    'title_en' => 'JAMALPUR',
                    'title_bn' => 'জামালপুর ',
                    'bbs_code' => '39',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            22 =>
                array (
                    'id' => 23,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'KISHOREGONJ',
                    'title_bn' => 'কিশোরগঞ্জ ',
                    'bbs_code' => '48',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            23 =>
                array (
                    'id' => 24,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'MADARIPUR',
                    'title_bn' => 'মাদারীপুর ',
                    'bbs_code' => '54',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            24 =>
                array (
                    'id' => 25,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'MANIKGANJ',
                    'title_bn' => 'মানিকগঞ্জ ',
                    'bbs_code' => '56',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            25 =>
                array (
                    'id' => 26,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'MUNSHIGANJ',
                    'title_bn' => 'মুন্সিগঞ্জ ',
                    'bbs_code' => '59',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            26 =>
                array (
                    'id' => 27,
                    'division_id' => 9,
                    'division_bbs_code' => '45',
                    'title_en' => 'MYMENSINGH',
                    'title_bn' => 'ময়মনসিংহ ',
                    'bbs_code' => '61',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            27 =>
                array (
                    'id' => 28,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'NARAYANGANJ',
                    'title_bn' => 'নারায়ণগঞ্জ ',
                    'bbs_code' => '67',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            28 =>
                array (
                    'id' => 29,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'NARSINGDI',
                    'title_bn' => 'নরসিংদী ',
                    'bbs_code' => '68',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            29 =>
                array (
                    'id' => 30,
                    'division_id' => 9,
                    'division_bbs_code' => '45',
                    'title_en' => 'NETRAKONA',
                    'title_bn' => 'নেত্রকোণা ',
                    'bbs_code' => '72',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            30 =>
                array (
                    'id' => 31,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'RAJBARI',
                    'title_bn' => 'রাজবাড়ী ',
                    'bbs_code' => '82',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            31 =>
                array (
                    'id' => 32,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'SHARIATPUR',
                    'title_bn' => 'শরীয়তপুর  ',
                    'bbs_code' => '86',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            32 =>
                array (
                    'id' => 33,
                    'division_id' => 9,
                    'division_bbs_code' => '45',
                    'title_en' => 'SHERPUR',
                    'title_bn' => 'শেরপুর ',
                    'bbs_code' => '89',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            33 =>
                array (
                    'id' => 34,
                    'division_id' => 3,
                    'division_bbs_code' => '30',
                    'title_en' => 'TANGAIL',
                    'title_bn' => 'টাঙ্গাইল ',
                    'bbs_code' => '93',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            34 =>
                array (
                    'id' => 35,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'BAGERHAT',
                    'title_bn' => 'বাগেরহাট',
                    'bbs_code' => '01',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            35 =>
                array (
                    'id' => 36,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'CHUADANGA',
                    'title_bn' => 'চুয়াডাঙ্গা ',
                    'bbs_code' => '18',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            36 =>
                array (
                    'id' => 37,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'JESSORE',
                    'title_bn' => 'যশোর',
                    'bbs_code' => '41',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            37 =>
                array (
                    'id' => 38,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'JHENAIDAH',
                    'title_bn' => 'ঝিনাইদহ ',
                    'bbs_code' => '44',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            38 =>
                array (
                    'id' => 39,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'KHULNA',
                    'title_bn' => 'খুলনা ',
                    'bbs_code' => '47',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            39 =>
                array (
                    'id' => 40,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'KUSHTIA',
                    'title_bn' => 'কুষ্টিয়া ',
                    'bbs_code' => '50',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            40 =>
                array (
                    'id' => 41,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'MAGURA',
                    'title_bn' => 'মাগুরা',
                    'bbs_code' => '55',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            41 =>
                array (
                    'id' => 42,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'MEHERPUR',
                    'title_bn' => 'মেহেরপুর ',
                    'bbs_code' => '57',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            42 =>
                array (
                    'id' => 43,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'NARAIL',
                    'title_bn' => 'নড়াইল ',
                    'bbs_code' => '65',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            43 =>
                array (
                    'id' => 44,
                    'division_id' => 4,
                    'division_bbs_code' => '40',
                    'title_en' => 'SATKHIRA',
                    'title_bn' => 'সাতক্ষীরা ',
                    'bbs_code' => '87',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            44 =>
                array (
                    'id' => 45,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'BOGRA',
                    'title_bn' => 'বগুড়া ',
                    'bbs_code' => '10',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            45 =>
                array (
                    'id' => 46,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'JOYPURHAT',
                    'title_bn' => 'জয়পুরহাট',
                    'bbs_code' => '38',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            46 =>
                array (
                    'id' => 47,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'NAOGAON',
                    'title_bn' => 'নওগাঁ ',
                    'bbs_code' => '64',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            47 =>
                array (
                    'id' => 48,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'NATORE',
                    'title_bn' => 'নাটোর ',
                    'bbs_code' => '69',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            48 =>
                array (
                    'id' => 49,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'CHAPAI NABABGANJ',
                    'title_bn' => 'চাঁপাই নাবাবগঞ্জ ',
                    'bbs_code' => '70',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            49 =>
                array (
                    'id' => 50,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'PABNA',
                    'title_bn' => 'পাবনা',
                    'bbs_code' => '76',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            50 =>
                array (
                    'id' => 51,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'RAJSHAHI',
                    'title_bn' => 'রাজশাহী ',
                    'bbs_code' => '81',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            51 =>
                array (
                    'id' => 52,
                    'division_id' => 5,
                    'division_bbs_code' => '50',
                    'title_en' => 'SIRAJGANJ',
                    'title_bn' => 'সিরাজগঞ্জ',
                    'bbs_code' => '88',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            52 =>
                array (
                    'id' => 53,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'DINAJPUR',
                    'title_bn' => 'দিনাজপুর ',
                    'bbs_code' => '27',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            53 =>
                array (
                    'id' => 54,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'GAIBANDHA',
                    'title_bn' => 'গাইবান্ধা ',
                    'bbs_code' => '32',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            54 =>
                array (
                    'id' => 55,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'KURIGRAM',
                    'title_bn' => 'কুড়িগ্রাম ',
                    'bbs_code' => '49',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            55 =>
                array (
                    'id' => 56,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'LALMONIRHAT',
                    'title_bn' => 'লালমনিরহাট ',
                    'bbs_code' => '52',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            56 =>
                array (
                    'id' => 57,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'NILPHAMARI',
                    'title_bn' => 'নীলফামারী',
                    'bbs_code' => '73',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            57 =>
                array (
                    'id' => 58,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'PANCHAGARH',
                    'title_bn' => 'পঞ্চগড় ',
                    'bbs_code' => '77',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            58 =>
                array (
                    'id' => 59,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'RANGPUR',
                    'title_bn' => 'রংপুর ',
                    'bbs_code' => '85',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            59 =>
                array (
                    'id' => 60,
                    'division_id' => 6,
                    'division_bbs_code' => '60',
                    'title_en' => 'THAKURGAON',
                    'title_bn' => 'ঠাকুরগাঁও',
                    'bbs_code' => '94',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            60 =>
                array (
                    'id' => 61,
                    'division_id' => 7,
                    'division_bbs_code' => '70',
                    'title_en' => 'HABIGANJ',
                    'title_bn' => 'হবিগঞ্জ ',
                    'bbs_code' => '36',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            61 =>
                array (
                    'id' => 62,
                    'division_id' => 7,
                    'division_bbs_code' => '70',
                    'title_en' => 'MAULVIBAZAR',
                    'title_bn' => 'মৌলভীবাজার ',
                    'bbs_code' => '58',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            62 =>
                array (
                    'id' => 63,
                    'division_id' => 7,
                    'division_bbs_code' => '70',
                    'title_en' => 'SUNAMGANJ',
                    'title_bn' => 'সুনামগঞ্জ ',
                    'bbs_code' => '90',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
            63 =>
                array (
                    'id' => 64,
                    'division_id' => 7,
                    'division_bbs_code' => '70',
                    'title_en' => 'SYLHET',
                    'title_bn' => 'সিলেট',
                    'bbs_code' => '91',
                    'status' => 1,
                    'created_by' => null,
                    'updated_by' => null,
                    'created_at' => '2020-03-29 02:07:03',
                    'updated_at' => '2020-03-29 02:07:03',
                ),
        ));

        Schema::enableForeignKeyConstraints();

    }
}
