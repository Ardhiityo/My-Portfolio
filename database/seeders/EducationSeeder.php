<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Place;
use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Path file in public
        $publicPath = public_path('images/experience.jpeg');
        $extension = pathinfo($publicPath, PATHINFO_EXTENSION);

        // New path in storage
        $storedPath = 'education/' . uniqid() . ".$extension";

        // Copy file to storage
        if (file_exists($publicPath)) {
            Storage::disk('public')->put($storedPath, file_get_contents($publicPath));
        }

        $user = User::first();
        $place = Place::first();

        Education::create([
            'user_id' =>  $user->id,
            'place_id' => $place->id,
            'degree' => 'Gelar Sarjana, Teknik Informatika',
            'gpa' => '4th Semester - GPA 3.62',
            'start_date' => '2025-04-01',
            'end_date' => '2025-04-01',
            'description' => "<p>I am an active undergraduate student of Informatics Engineering at Al-Khairiyah University, have a certificate of expertise, and project experience. I am very enthusiastic to share knowledge and work together. Let's establish friendship and collaboration to create something extraordinary.&nbsp;</p>",
            'image' => [$storedPath],
        ]);
    }
}
