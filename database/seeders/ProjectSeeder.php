<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->slug(2);
            $newProject->dev = $faker->name();
            $newProject->description = $faker->realText(400);
            $newProject->languages = $faker->words(3, true);
            $newProject->date = $faker->date();
            $newProject->github = $faker->url();
            $newProject->image = $faker->url();
            $newProject->save();
        }
    }
}
