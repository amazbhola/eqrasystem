<?php

namespace Database\Seeders;

use App\Models\Department;
use Database\Factories\DepartmentFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //    Department::factory(10)->create();
        $this->call([
            // UserSeeder::class,
            DepartmentSeeder::class,
            MethodSeeder::class,
            locationSeeder::class,
            TenderSeeder::class,

        ]);
    }
}
