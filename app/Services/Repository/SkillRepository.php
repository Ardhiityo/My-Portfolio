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

        if ($user) {
            return Skill::with('category')
                ->where('user_id', $user->id)
                ->latest()->take(3)->get();
        }

        return [];
    }

    public function getTotalSkills()
    {
        $user = User::first();

        if ($user) {
            return Skill::where('user_id', $user->id)->get();
        }

        return 0;
    }

    public function getAllSkills()
    {
        $user = User::first();

        if ($user) {
            return Skill::with('category')->where('user_id', $user->id)->get();
        }

        return [];
    }
}
