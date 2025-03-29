<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PlaceSeeder::class,
            JobTypeSeeder::class,
            PronounSeeder::class,
            CategorySeeder::class,
            ProjectSeeder::class,
            SkillSeeder::class,
            CertificationSeeder::class,
            CourseSeeder::class,
            ProfileSeeder::class,
            ContactSeeder::class,
            AboutSeeder::class,
            OrganizationSeeder::class,
            ExperienceSeeder::class,
            EducationSeeder::class,
            CurriculumVitaeSeeder::class
        ]);
    }
}
