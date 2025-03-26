<?php

namespace App\Http\Controllers;

use App\Services\Interface\EducationService;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct(private EducationService $educationService) {}

    public function education()
    {
        $educations = $this->educationService->getAllEducations();
        return view('pages.education', compact('educations'));
    }
}
