<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SleepType;
use Illuminate\Http\Request;

class SleepController extends Controller
{
    public function index(){
        $data = SleepType::with('videos')->get();
        // dd($data);
        $title = "Sleep";
        return view('frontend.pages.sleep.sleep', compact('data', 'title'));
    }
}
