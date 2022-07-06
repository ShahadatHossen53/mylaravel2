<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class classController extends Controller
{
    //__constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $classes = DB::table('classes')->get();
        
        return view('admin/classes/classes', compact('classes'));
        
    }

    //add class function//

    public function store()
    {
        return view('admin/classes/addClass');
    }

    public function edit($id)
    {
        $data = DB::table('classes')->where('id', $id)->first();
        return view('admin/classes/updateClass', compact('data'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'class_id' => 'required | unique:classes',
        ]);

        $data = array(
            'class_id' => $request->class_id,
        );

        DB::table('classes')->insert($data);

        return redirect()->back()->with('success', 'Successfuly inserted!');
        
    }

    public function update(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
        ]);

        $data = array(
            'class_id' => $request->class_id,
        );

        $id = $request->uid;

        DB::table('classes')->where('id', $id)->update($data);

        return redirect()->back()->with('success', 'Successfuly Updated!');
        
    }


    //__Delete class function__//

    public function delete($id)
    {
        DB::table('classes')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Successfuly deleted!');
    }




}
