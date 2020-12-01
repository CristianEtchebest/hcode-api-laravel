<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users (name, email) values(?,?)',
            array('Anthony Garotinho','antony@hcode.com.br'));
    }
}
