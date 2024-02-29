<?php

namespace Database\Seeders;

use App\Http\Controllers\ActuatorsController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([UsersTableSeeder::class, SensorsTableSeeder::class, ActuatorsTableSeeder::class]);
    }
}
