<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            ['module' => 'Module 1', 'created_at' => now(), 'updated_at' => now()],
            ['module' => 'Module 2', 'created_at' => now(), 'updated_at' => now()],
            ['module' => 'Module 3', 'created_at' => now(), 'updated_at' => now()],
            ['module' => 'Module 4', 'created_at' => now(), 'updated_at' => now()],
            ['module' => 'Module 5', 'created_at' => now(), 'updated_at' => now()]
        ];

        Module::insert($modules);
    }
}
