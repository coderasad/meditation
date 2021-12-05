<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $all_data = Event::where('category_id',2)->limit(20)->get();
        $online_data = CourseStub::with('event')->where('type','online_course')->limit(20)->get();

        $title = "Course";

        return view('frontend.pages.courses.courses', compact('all_data' ,'online_data', 'title'));
    }
}
