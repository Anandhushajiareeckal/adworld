<?php

namespace App\Http\Controllers;
use App\Models\Achievement;
use App\Models\Achivement_list;
use App\Models\gallery;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function service(){
        return view('frontend.service');
    }

    public function achievements(){
        $achievements = Achievement::all();
        $achivement_list = Achivement_list::all();
        return view('frontend.achievements', compact('achievements','achivement_list'));
    }

    public function gallery(){
        $gallery = gallery::all();
        return view('frontend.gallery', compact('gallery'));
    }

    public function contact(){
        return view('frontend.contact');
    }

}
