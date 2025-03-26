<?php

namespace App\Http\Controllers;

use App\Services\Interface\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(private CourseService $courseService) {}
    public function course()
    {
        $courses = $this->courseService->getAllCourses();
        return view('pages.course', compact('courses'));
    }
}
