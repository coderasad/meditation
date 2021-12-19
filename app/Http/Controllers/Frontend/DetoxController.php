<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MeditationType;
use Illuminate\Http\Request;

class DetoxController extends Controller
{
    public function index($id){
        $data = MeditationType::where('id', $id)->first();
        $title = 'Detox';
        return view('frontend.pages.focuse.focuse', compact('data', 'title'));
    }
    public function detox(){
        $data = MeditationType::all();
        $title = 'Detox';
        return view('frontend.pages.detox.detox', compact('data', 'title'));
    }
}
