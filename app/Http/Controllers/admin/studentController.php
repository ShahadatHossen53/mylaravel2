<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = DB::table('students')->get();
        
        return view('admin/student/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        
        return view('admin/student/create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'sid' => 'required|unique:students',

        ]);

        $data = array(
            'class_id' => $request->class_id,
            'name' => $request->name,
            'sid' => $request->sid,
            'email' => $request->email,
            'phone' => $request->phone,
        );

        DB::table('students')->insert($data);

        return redirect()->back()->with('success', 'Successfuly inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = DB::table('classes')->get();
        $student = DB::table('students')->where('id', $id)->first();
        
        return view('admin/student/edit', compact('classes', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'sid' => 'required',

        ]);

        $data = array(
            'class_id' => $request->class_id,
            'name' => $request->name,
            'sid' => $request->sid,
            'email' => $request->email,
            'phone' => $request->phone,
        );

        DB::table('students')->where('id', $id)->update($data);

        return redirect()->route('students.index')->with('success', 'Successfuly updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Successfuly deleted!');
    }
}
