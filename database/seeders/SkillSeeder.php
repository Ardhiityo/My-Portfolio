<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::first();
        $user = User::first();

        Skill::create([
            'name' => 'Laravel',
            'category_id' => $category->id,
            'user_id' => $user->id
        ]);
    }
}
