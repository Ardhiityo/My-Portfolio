<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Place;
use App\Models\JobType;
use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ExperienceSeeder extends Seeder
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
        $storedPath = 'experience/' . uniqid() . ".$extension";

        // Copy file to storage
        if (file_exists($publicPath)) {
            Storage::disk('public')->put($storedPath, file_get_contents($publicPath));
        }

        $place = Place::first();
        $job = JobType::first();
        $user = User::first();

        Experience::create([
            'job_title' => 'Fullstack Web Coding Mentor',
            'place_id' => $place->id,
            'user_id' => $user->id,
            'job_type_id' => $job->id,
            'start_date' => '2025-03-01',
            'end_date' => '2025-03-01',
            'description' => '<p>&nbsp;- Teaching and Mentoring:<br>Teach and mentor course participants in various certified coding classes, covering topics such as HTML, CSS, JavaScript, PHP, and frameworks like Laravel.<br><br>- Workshop Mentor:<br>Active as a mentor in various workshops, providing practical guidance and technical solutions to participants to develop their skills in fullstack web development.<br><br>- Curriculum Development:<br>Contribute in the development of curriculum and learning materials for coding courses, ensuring the content delivered is relevant and up-to-date with the latest industry trends.&nbsp;</p>',
            'image' => [$storedPath,],
        ]);
    }
}
