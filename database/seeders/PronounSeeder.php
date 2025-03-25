<?php

namespace Database\Seeders;

use App\Models\Pronoun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PronounSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pronoun::create([
            'name' => '(He/Him)'
        ]);
    }
}
