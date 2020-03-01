<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller
{
    public function index()
    {    
        $student = student::all();
    	return view('student_index', compact('student'));
    }
    public function create()
    {    return view('student_create');
}
public function store(Request $request)
{  
  
    $s=new student();
    $s->id=$request->student_id;
    $s->name=$request->student_name;
    $s->age=$request->student_age;
    $s->gender=$request->student_gender;
    $s->educationqualification=$request->student_qualification;
    $s->department=$request->student_department;

    $s->save();
    return redirect()->route('student.index');

}
public function edit($id)
{
    $student = student::find($id);
    return view('student_edit', compact('student'));
}
public function update(Request $request,$id)
{
    if($id){
        $s = student::find($id);
        $s->id=$request->student_id;
        $s->name=$request->student_name;
        $s->age=$request->student_age;
        $s->gender=$request->student_gender;
        $s->educationqualification=$request->student_qualification;
        $s->department=$request->student_department;
        $s->save();
    return redirect()->route('student.index');
    }
}
public function destroy($id)
{
    $student = student::find($id);
    $student->delete();
    return redirect()->route('student.index');
}

}
?>