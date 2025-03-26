<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Place;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $place = Place::where('name', 'Codepolitan')->first();

        Course::create([
            'user_id' =>  $user->id,
            'place_id' => $place->id,
            'description' => 'Kursus mahir fullstack web developer from a to z',
            'start_date' => '2025-03-01',
            'end_date' => '2025-03-01'
        ]);
    }
}
