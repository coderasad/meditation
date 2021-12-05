<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseStub;
use App\Models\Event;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        $all_data = Event::where('category_id',3)->paginate(18);

        $title = "Session";
        // dd($popular_data);
        return view('frontend.pages.sessions.sessions', compact('all_data',  'title'));
    }
}
