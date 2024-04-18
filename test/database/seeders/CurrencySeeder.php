<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->insert(['id' => 1,'name' => 'ریال',"coefficient"=>"1","code"=>"Rial"]);
        DB::table('currencies')->insert(['id' => 2,'name' => 'تتر',"coefficient"=>"70000","code"=>"tt"]);
        DB::table('currencies')->insert(['id' => 3,'name' => 'بیتکوین',"coefficient"=>"70000000000000000","code"=>"bit"]);
    }
}
