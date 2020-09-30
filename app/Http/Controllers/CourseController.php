<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Inertia\Inertia;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function index()
    {

        $courses = Course::with('user')->withCount('episodes')->get();
        // dd($courses);
        return Inertia::render('Courses/index', [
            'courses' => $courses
        ]);
    }
    public function show(int $id)
    {
        $course = Course::where('id', $id)->with('episodes')->first();

        return Inertia::render('Courses/show', [
            'course' => $course
        ]);
    }
}
