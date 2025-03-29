<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CurriculumVitae;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CurriculumVitaeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        // Path file in public
        $publicPath = public_path('cv/CV_AryaAdhiPrasetyo.pdf');
        $extension = pathinfo($publicPath, PATHINFO_EXTENSION);

        // New path in storage
        $storedPath = 'cv/' . uniqid() . ".$extension";

        // Copy file to storage
        if (file_exists($publicPath)) {
            Storage::disk('public')->put($storedPath, file_get_contents($publicPath));
        }

        CurriculumVitae::create([
            'user_id' => $user->id,
            'cv' => $storedPath
        ]);
    }
}
