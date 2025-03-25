<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Pronoun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{

    public function storedPath($path)
    {
        // Path file in public
        $publicPath = public_path($path);
        $extension = pathinfo($publicPath, PATHINFO_EXTENSION);

        // New path in storage
        $storedPath = 'profile/' . uniqid() . ".$extension";

        // Copy file to storage
        if (file_exists($publicPath)) {
            Storage::disk('public')->put($storedPath, file_get_contents($publicPath));
        }

        return $storedPath;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $pronoun = Pronoun::first();

        Profile::create([
            'user_id' =>  $user->id,
            'name' => "Arya Adhi Prasetyo",
            'avatar' => $this->storedPath('images/profile.jpeg'),
            'background_image' => $this->storedPath('images/banner.jpeg'),
            'job_title' => 'Fullstack Web Developer | Laravel Developer',
            'address' => 'Cilegon, Banten, Indonesia',
            'pronoun_id' => $pronoun->id
        ]);
    }
}
