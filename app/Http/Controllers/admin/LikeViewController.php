<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Project;
use Illuminate\Http\Request;

class LikeViewController extends Controller
{
    public function addLike(Request $request,$id)
    {
        
        $request->validate([
            'project_id'=>'required'
        ]);
        $project=Project::find($id);
        $project_id=$project->id;
        return $project_id;
        $like=Like::create([
            'project_id'=>$request->id
        ]);
        if($like)
        {
            echo "save";
        }else{
            echo "failed";
        }
    }
}
