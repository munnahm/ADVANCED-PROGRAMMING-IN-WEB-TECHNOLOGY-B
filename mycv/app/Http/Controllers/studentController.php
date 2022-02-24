<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class studentController extends Controller
{
    //
    public function list(){
        /*$students=array();
        for($i=0;$i<10;$i++){
            $student=array('id'=>$i+101,
            'name'=>'Person '.$i+1,
            'dept'=>'CSE');
            $students[]=(object)$student;
        }*/
        $students= student::all();
        
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
        return view('userForms.login')->with('input',$r);
    }
    public function home(Request $r){
        $r->validate([
        'username'=>'required|max:40',
        'email'=>'required',
        'password'=>'required|min:4',
        'conPassword'=>'required|same:password'
        ]);
        $s=new student();
        $s->username=$r->username;
        $s->password=$r->password;
        $s->email=$r->email;
        $s->save();
        return view('userForms.registration')
        ->with('conMessage','Registration Confirmed '.strtoupper($s->username).' Now You Can Login.');
    }
    public function register(){
        return view('userForms.registration')
        ->with('conMessage','');
    }
    public function edit(Request $r){
        $st = student::where('id','=',decrypt($r->id))->first();
        if($r->submit != ""){
            $st->username = $r->username;
            $st->email = $r->email;
            $st->save();
            $students= student::all();
        
        return view('student.list')->with('students',$students);
        }
        return view('student.edit')
        ->with('student',$st);
    }
}
