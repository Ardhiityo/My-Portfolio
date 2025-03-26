<?php

namespace App\Http\Controllers;

use App\Services\Interface\SkillService;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function __construct(private SkillService $skillService) {}

    public function skill()
    {
        $skills = $this->skillService->getAllSkills();
        return view('pages.skill', compact('skills'));
    }
}
