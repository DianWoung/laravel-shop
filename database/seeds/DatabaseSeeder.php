<?php

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\AdminTablesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //填充laravel-admin数据
        $this->call(AdminTablesSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
