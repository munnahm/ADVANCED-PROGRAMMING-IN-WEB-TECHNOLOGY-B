<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function list(){
        $students=array();
        for($i=0;$i<10;$i++){
            $student=array('id'=>$i+101,
            'name'=>'Person '.$i+1,
            'dept'=>'CSE');
            $students[]=(object)$student;
        }
        
        return view('student.list')->with('students',$students);
    }
    public function get(){
        $name='mahedi';
        $id=101;
        $names=['mahedi','hasan','munna'];

        return view('student.get')
        ->with('name','munna01')
        ->with('id',$id)
        ->with('names',$names);
    }
    public function create(){
        return view('student.create');
    }
    public function details($id,$name){
        return view('student.details')
        ->with('id',$id)
        ->with('name',$name);
    }
    public function login(Request $r){
        return view('userForms.login')->with('inp',$r);
    }
    public function home(Request $r){
    $r->validate([
    'username'=>'required|max:10',
    'password'=>'required|min:4'
    ]);
        return $r;
    }
}
