<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class studentController extends Controller
{
    public function displayform()
    {
        return view('student');
    }
    public function save(Request $request)
    {
        $student_name=$request->input('user');
        $student_email=$request->input('email');
        $student_pass=$request->input('pass');
        $student_phone=$request->input('phone');
        $student_course=$request->input('course');
        DB::insert('INSERT INTO student(name,email,pass,phone,course) VALUES (?,?,?,?,?)',[$student_name,$student_email,$student_pass,$student_phone,$student_course]);
        return redirect('student')->with('success','Data Saved');
    }

    public function viewform()
    {
    	return view('studentview');
    }
    public function index()
    {
    	$student = DB::select("SELECT * FROM student");
    	return view('studentview',['student' => $student]);
    }

    public function edit($id)
    {
    	$student = DB::select('SELECT * FROM student WHERE id = ?',[$id]);
    	return view('studentedit',['student' => $student]);
    }
    public function update_view(Request $request,$id)
    {
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$pass = $request->input('pass');
    	$phone = $request->input('phone');
    	$couirse = $request->input('course');
    	DB::update('UPDATE student SET name=?,email=?,pass=?,phone=?,course=?,WHERE id=?',[$name,$email,$pass,$phone,$course,$id]);
    	return redirect('studentview')->with('success','Data Updated');

    	//return redirect('studentview')->route('studentController@index');
    	//return redirect('studentview')->action('studentController@index');
    	//return header('location:studentview');
    }
    public function delete_func($id)
    {
    	$student = DB::delete('DELETE FROM student WHERE id =?',[$id]);
    	return redirect('studentview')->with('success','Data Successfully Deleted');
    }
}
