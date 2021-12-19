<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MeditationType;
use App\Models\MeditationVideo;
use Illuminate\Http\Request;

class   FocuseController extends Controller
{
    public function index($id){
        $data = MeditationType::where('id', $id)->first();
        $meditation_videos = MeditationVideo::get();
        // dd($meditation_videos);
        $title = 'Focus';
        return view('frontend.pages.focuse.focuse', compact('data', 'title', 'meditation_videos'));
    }
}
