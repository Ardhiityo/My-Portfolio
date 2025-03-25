<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        Organization::create([
            'user_id' => $user->id,
            'name' => ' Kelompok Studi Pasar Modal',
            'description' => "Sharing knowledge kepada mahasiswa betapa pentingnya investasi sedari dini, dan mejadi panitia dalam rangkaian acara-acara seminar investasi di dunia pasar modal.",
            'job_title' => 'Anggota',
            'start_date' => '2025-03-01',
            'end_date' => '2025-03-01'
        ]);
    }
}
