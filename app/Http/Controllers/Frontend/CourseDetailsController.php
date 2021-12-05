<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function index($id){
        $data = Event::with('category')->where('id', $id)->first();
        return view('frontend.pages.course-details.course-details', compact('data'));
    }
}
