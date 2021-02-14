<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
     DB::table('settings')->insert([
     'title'=>'ABC Klinik',
     'active'=>'1',
     'created_at'=>now(),
     'updated_at'=>now()
     ]);
     }
}
