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
        $imageName = $request->file('courseQrCode')->hashName();
        $request->courseQrCode->move(public_path('images/coursesQrCode'), $imageName);

        DB::insert('insert into courses (name, course_date, qr_code_path) values (?, ?, ?)', [$request->courseName, $request->courseDate, 'images/coursesQrCode/'.$imageName]);
        return "gg";
    }
}
