<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\Certification;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path file in public
        $publicPath = public_path('images/certificate.jpeg');
        $extension = pathinfo($publicPath, PATHINFO_EXTENSION);

        // New path in storage
        $storedPath = 'certification/' . uniqid() . ".$extension";

        // Copy file to storage
        if (file_exists($publicPath)) {
            Storage::disk('public')->put($storedPath, file_get_contents($publicPath));
        }

        $place = Place::where('name', 'Codepolitan')->first();
        $user = User::first();

        Certification::create([
            'title' => ' Sertifikat Kelas Membuat Website Crowd Funding dengan Tailwind - Slicing',
            'description' => 'Slicing Website Crowd Funding dengan Tailwind',
            'place_id' => $place->id,
            'published_date' => '2025-03-01',
            'expired_date' => '2025-03-01',
            'credential' => 'https://www.codepolitan.com/c/SWB0NHM',
            'image' => $storedPath,
            'user_id' => $user->id
        ]);
    }
}
