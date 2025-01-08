<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project=Project::all();
        return view('admin.project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'title'=>'required|max:225',
            'description'=>'required',
            'technologies'=>'required',
            'project_url'=>'required|url',
        ]);
        $project=new Project();
        $project->title=$request->title;
        $project->description=$request->description;
        $project->technologies=$request->technologies;
        $project->project_url=$request->project_url;
        $project->user_id=Auth::user()->id;
        $project->save();
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project=Project::findOrFail($id);
        return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $request;
        $request->validate([
            'title'=>'required|max:225',
            'description'=>'required',
            'technologies'=>'required',
            'project_url'=>'required|url',
        ]);
        $project=Project::findOrFail($id);
        $project->title=$request->title;
        $project->description=$request->description;
        $project->technologies=$request->technologies;
        $project->project_url=$request->project_url;
        $project->user_id=Auth::user()->id;
        $project->update();
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
