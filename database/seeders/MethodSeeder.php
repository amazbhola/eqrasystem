<?php

namespace Database\Seeders;


use App\Models\Method;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Method::factory(10)->create();
    }
}
