<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = Type::all()->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($types);
            $newProject->name = $faker->name();
            $newProject->content = $faker->realText();
            $newProject->url = $faker->url();
            $newProject->image = $faker->imageUrl();
            $newProject->save();
        }
    }
}
