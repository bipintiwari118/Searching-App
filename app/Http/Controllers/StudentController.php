<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function search(Request $request){
        $search=$request['search'] ??"";
        if($search!=""){
            $students=Student::where('name',"LIKE","$search%")->orwhere('phone',"LIKE","$search%")->get();

        }else{
            $students=Student::all();

        }
        $data['search']=$search;
        $data['students']=$students;
        return view('studenttable',$data);

    }
}
