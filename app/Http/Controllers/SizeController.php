<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        $data = Size::orderBy('id','DESC')->get();
        return view('dashboard.sizes.index',compact('data'));
    }


    public function create(){
        return view('dashboard.sizes.create');
    }

    public function save(Request $request){
        $size = Size::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
 
    return redirect()->route('sizes.index')->with('success','Size Added Successfully');
    }

    public function edit($id){

        $info = Size::findOrFail($id);
        return view('dashboard.sizes.edit',['info'=>$info]);
    }

    public function update(Request $request){
        $size = Size::findOrFail($request->id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
 
    return redirect()->route('sizes.index')->with('success','Size Updated Successfully');
    }


    
    public function destroy($id){

        $info = Size::findOrFail($id);
        $info->delete();
        return redirect()->route('sizes.index')->with('success','Size Deleted Successfully');
    }
}