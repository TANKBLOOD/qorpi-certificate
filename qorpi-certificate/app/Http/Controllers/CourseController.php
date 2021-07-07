<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index() {
        $courses= Course::all();
        return view('course.index', ['courses'=> $courses]);
    }
    public function create() {
        return view('course.create');
    }
    public function store(Request $request) {
        DB::insert('insert into courses (name, course_date) values (?, ?)', [$request->courseName, $request->courseDate]);
        return "gg";
    }
}
