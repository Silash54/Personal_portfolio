<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $skill=Skill::orderBy('id','desc')->take(5)->get();
        $profile=User::where('role',0)->first();
        $education=Education::orderBy('id','desc')->take(3)->get();
        $project=Project::all();
        View::share([
            'skill'=>$skill,
            'profile'=>$profile,
            'education'=>$education,
            'project'=>$project
        ]);
    }
    public function home()
    {
        return view('frontend.Layout.home');
    }
}
