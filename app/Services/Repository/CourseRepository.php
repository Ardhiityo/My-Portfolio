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

        if ($user) {
            return Course::with('place')
                ->where('user_id', $user->id)
                ->latest()->take(3)->get();
        }

        return [];
    }

    public function getTotalCourses()
    {
        $user = User::first();

        if ($user) {
            return Course::where('user_id', $user->id)->count();
        }

        return 0;
    }

    public function getAllCourses()
    {
        $user = User::first();

        if ($user) {
            return Course::with('place')->where('user_id', $user->id)->get();
        }

        return [];
    }
}
