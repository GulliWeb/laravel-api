<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ["HTML", "CSS", "JavaScript", "Vue.js", "Vite", "PHP", "Laravel", "MySQL"];

        foreach ($technologies as $technology) {
            $type = new Technology();
            $type->name = $technology;
            $type->save();
        }
    }
}
