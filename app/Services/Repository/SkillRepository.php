<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\Skill;
use App\Services\Interface\SkillService;

class SkillRepository implements SkillService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getSkills()
    {
        $user = User::first();

        return Skill::with('category')
            ->where('user_id', $user->id)
            ->latest()->take(3)->get();
    }

    public function getTotalSkills()
    {
        return Skill::count();
    }

    public function getAllSkills()
    {
        return Skill::with('category')->get();
    }
}
