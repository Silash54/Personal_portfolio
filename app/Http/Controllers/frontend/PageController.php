<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $skill=Skill::orderBy('id','desc')->take(5)->get();
        View::share([
            'skill'=>$skill
        ]);
    }
    public function home()
    {
        return view('frontend.Layout.home');
    }
}
