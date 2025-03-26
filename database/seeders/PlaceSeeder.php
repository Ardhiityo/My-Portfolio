<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaceSeeder extends Seeder
{

    public function storedPath($path)
    {
        // Path file in public
        $publicPath = public_path($path);
        $extension = pathinfo($publicPath, PATHINFO_EXTENSION);

        // New path in storage
        $storedPath = 'place/' . uniqid() . ".$extension";

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

        Place::create([
            'name' => 'Universitas Al-Khairiyah',
            'address' => 'Jl. Kh.Enggus Arja No.1, Citangkil, Kec. Citangkil, Kota Cilegon, Banten 42441',
            'logo' => $this->storedPath('images/unival.jpeg')
        ]);

        Place::create([
            'name' => 'Codepolitan',
            'address' => 'Jl. Sangkuriang No.10 RT 005 RW 012, Kelurahan Padasuka, Kecamatan Cimahi Tengah, Kota Cimahi, Jawa Barat 40526',
            'logo' => $this->storedPath('images/codepolitan.jpeg')
        ]);
    }
}
