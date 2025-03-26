<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\Course;
use App\Services\Interface\CourseService;

class CourseRepository implements CourseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getCourses()
    {
        $user = User::first();

        return Course::with('place')
            ->where('user_id', $user->id)
            ->latest()->take(3)->get();
    }

    public function getTotalCourses()
    {
        return Course::count();
    }

    public function getAllCourses()
    {
        return Course::with('place')->get();
    }
}
