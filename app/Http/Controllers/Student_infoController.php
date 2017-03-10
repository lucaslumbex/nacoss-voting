<?php

namespace App\Http\Controllers;

use App\Student_info;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class Student_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    public function index()
    {
        //
        $student_info = Student_info::all();
        $logged_in_user = Auth::user();

        $allData = [
            'current_user' => $logged_in_user,
            'student_infos' => $student_info,
            'error' => '',
            'success' => '',
            'title' => 'All Student Info',
            'ActivePage' => 'All Student Info'
        ];

        return view('admin.student_info.all', $allData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $logged_in_user = Auth::user();

        $allData = [
            'current_user' => $logged_in_user,
            'error' => '',
            'success' => '',
            'title' => 'Add Student Info',
            'ActivePage' => 'Add Student Info'
        ];

        return view('admin.student_info.add', $allData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'matric_no'=> 'required|Size:10|unique:student_info,matric_no',
            'name'=> 'required',
            'course'=> 'required'
        ]);

        $logged_in_user = Auth::user();
        $studendt_info = new Student_info();
        $studendt_info->matric_no = $request->matric_no;
        $studendt_info->name = $request->name;
        $studendt_info->course = $request->course;
        $save_am = $studendt_info->save();

        if (!$save_am){
            $allData = [
                'current_user' => $logged_in_user,
                'error' => 'Record Not Added',
                'success' => '',
                'title' => 'Add Student Info',
                'ActivePage' => 'Add Student Info'
            ];
            return view('admin.student_info.add', $allData);
        }else{
            $allData = [
                'current_user' => $logged_in_user,
                'error' => '',
                'success' => 'Record Added Successfully',
                'title' => 'Add Student Info',
                'ActivePage' => 'Add Student Info'
            ];
            return view('admin.student_info.add', $allData);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
