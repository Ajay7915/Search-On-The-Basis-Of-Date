<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Dotenv\Util\Str;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $today = date('Y-m-d');
        $student = new Student();
        if($request->id == 3) {
            $three = date('Y-m-d',strtotime("-3 months"));
            $students = Student::whereBetween('enroll',[$three,$today])->get();
        }else if($request->id == 6) {
            $six = date('Y-m-d',strtotime("-6 months"));
            $students = Student::whereBetween('enroll',[$six,$today])->get();
            
        }else if($request->id == 9){
            $nine = date('Y-m-d',strtotime("-9 months"));
            $students = Student::whereBetween('enroll',[$nine,$today])->get();
        }else {
             $students = Student::all();
        }
        return view('student.index', compact('students'));
       
    }

    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Student();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->pass;
        $data->enroll = date('Y-m-d');
        $data->save();
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
