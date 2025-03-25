<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path file in public
        $publicPath = public_path('images/unival.jpeg');
        $extension = pathinfo($publicPath, PATHINFO_EXTENSION);

        // New path in storage
        $storedPath = 'place/logo/' . uniqid() . ".$extension";

        // Copy file to storage
        if (file_exists($publicPath)) {
            Storage::disk('public')->put($storedPath, file_get_contents($publicPath));
        }

        Place::create([
            'name' => 'Universitas Al-Khairiyah',
            'address' => 'Jl. Kh.Enggus Arja No.1, Citangkil, Kec. Citangkil, Kota Cilegon, Banten 42441',
            'logo' => $storedPath
        ]);
    }
}
