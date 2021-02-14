<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
        'name'=>'Göktuğ Ceyhan',
        'bio'=>'Lorem ipsum dolor sit amet',
        'image' => 'a.jpg',
        'created_at'=>now(),
        'updated_at'=>now()
        ]);
    }
}
