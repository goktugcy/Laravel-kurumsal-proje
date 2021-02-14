<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class hakkimizdaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
        'title'=>'ABC Klinik',
        'content'=>'Lorem ipsum dolor sit amet',
        'created_at'=>now(),
        'updated_at'=>now()
        ]);
    }
}
