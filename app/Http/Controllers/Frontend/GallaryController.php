<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use App\Models\Video;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index(){
        $gallaries = Gallary::paginate(9);
        $videos = Video::orderby('id',"DESC")->skip(1)->take(3)->get();
        $firstVideo = Video::orderby('id',"DESC")->first();
        // dd($videos);

        return view('frontend.pages.gallary.gallary', compact('gallaries', 'videos', 'firstVideo'));
    }
}
