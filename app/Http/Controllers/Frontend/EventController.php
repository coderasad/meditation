<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CourseStub;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $all_events = Event::where('category_id',1)->paginate(9);
        $upcoming_events = Event::where('category_id',1)->whereDate('starting_date', ">=", date("Y-m-d"))
            ->where('category_id', 1)
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();

        return view('frontend.pages.events.events', compact('all_events', 'upcoming_events'));
    }
}
