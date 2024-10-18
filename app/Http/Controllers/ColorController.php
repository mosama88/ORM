<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function index(){
        $data =  Color::orderBy('id','DESC')->get();
        
        return view('dashboard.colors.index',compact('data'));
    }


    public function create(){
        
        return view('dashboard.colors.create');
    }

    
    public function save(Request $request){
        $color = new Color();
        
        $color['name'] = $request->name;
        $color['hexa_code'] = $request->hexa_code;
        $color['status'] = $request->status;
        $color->save();
        return redirect()->route('colors.index')->with('success','your data saved successfully');
    }

    public function edit($id){
       $info =  Color::findOrFail($id) ;
        return view('dashboard.colors.edit',['info'=>$info]);
    }


    public function update(Request $request){
        $color = Color::findOrFail($request->id);
        
        $color['name'] = $request->name;
        $color['hexa_code'] = $request->hexa_code;
        $color['status'] = $request->status;
        $color->save();
        return redirect()->route('colors.index')->with('success','your data updated successfully');
    }

    
    public function destroy(Request $request){
        $color = Color::findOrFail($request->id);

        $color->delete();
        return redirect()->route('colors.index')->with('success','your data dleted successfully');
    }

}