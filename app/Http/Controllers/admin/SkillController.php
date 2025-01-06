<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill=Skill::all();
        return view('admin.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required|max:256'
        ]);
        $skill=new Skill();
        $skill->title=$request->title;
        $skill->description=$request->description;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $skill->image="images/$newName";
        }
        $skill->save();
        return redirect()->route('skill.index')->with('success','Skill create successfully');
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
        $skill=Skill::find($id);
        return view('admin.skill.edit','skill');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required|max:256'
        ]);
        $skill=new Skill();
        $skill->title=$request->title;
        $skill->description=$request->description;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $skill->image="images/$newName";
        }
        $skill->save();
        return redirect()->route('skill.index')->with('success','Skill update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill=Skill::find($id);
        $skill->delete();
        return view('admin.skill.index',)->with('danger','Skill delete successfully');;
    }
}
