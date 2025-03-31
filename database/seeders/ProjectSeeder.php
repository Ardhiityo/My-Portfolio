<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path file in public
        $publicPath = public_path('images/project.png');
        $extension = pathinfo($publicPath, PATHINFO_EXTENSION);

        // New path in storage
        $storedPath = 'project/' . uniqid() . ".$extension";

        // Copy file to storage
        if (file_exists($publicPath)) {
            Storage::disk('public')->put($storedPath, file_get_contents($publicPath));
        }

        $user = User::first();

        Project::create([
            'user_id' => $user->id,
            'title' => 'Studi Kasus Full Stack Web Developer Membuat Blog',
            'start_date' => '2025-03-01',
            'link' => 'https://vue-blog-33fef.web.app',
            'end_date' => '2025-03-01',
            'image' => [$storedPath],
            'description' => 'Studi Kasus ini dibuat menggunakan Vue Js 3 di sisi Front-End, lalu Vue Router untuk Routing, dan Pinia sebagai State Managementnya, serta Firebase yang berfungsi sebagai database, aplikasi ini di deploy menggunakan layanan hosting dari Firebase, tujuan dari Studi Kasus ini adalah pemantapan materi CRUD yang berfokus pada penggunaan Vue Js dari mulai Reusable Component, memahami State Management menggunakan Pinia, serta mengetahui step by step CRUD pada Firebase.'
        ]);
    }
}
