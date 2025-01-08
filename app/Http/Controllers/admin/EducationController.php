<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education=Education::orderBy('id','desc')->get();
        return view('admin.education.index',compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'level'=>'required|max:256',
            'start'=>'required|date',
            'end'=>'required|date',
            
        ]);
        $education=new Education();
        $education->level=$request->level;
        $education->start=$request->start;
        $education->end=$request->end;
        $education->user_id=Auth::user()->id;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $education->image="images/$newName";
        }
        $education->save();
        return redirect()->route('education.index')->with('success','Education record save');
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
        $education=Education::find($id);
        return view('admin.education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'level'=>'required|max:256',
            'start'=>'required|date',
            'end'=>'required|date',
            
        ]);
        Education::create([
            'level'=>$request->level,
            'start'=>$request->start,
            'end'=>$request->end,
            'user_id'=>Auth::user()->id
        ]);
        return redirect()->route('education.index')->with('success','Education record Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education=Education::find($id);
        $education->delete();
        return redirect()->route('education.index')->with('success','Delete successfully');
    }
}
