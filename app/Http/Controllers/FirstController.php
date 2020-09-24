<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;
class FirstController extends Controller
{
    function create()
    {
        return view('First');
    }
    function db()
    {
        return DB::select('select * from student');
    }
    function save(Request $req)
    {
        $stud=new student;
        $stud->Fname=$req->fname;
        $stud->Lname=$req->lname;
        $stud->Email=$req->email;
        $stud->Mobileno=$req->mobileno;
        $stud->Address=$req->address;
        echo $stud->save();
    }
    function list1()
    {
        $data= student::all();
    
        return view('list',["data"=>$data]);
    }

    function edit($id)
    {
        $data =student::find($id);
        return view('Edit',["data"=>$data]);
    }
    function update(Request $req)
    {
        $stud=student::find($req->input('id'));
        $stud->Fname=$req->fname;
        $stud->Lname=$req->lname;
        $stud->Email=$req->email;
        $stud->Mobileno=$req->mobileno;
        $stud->Address=$req->address;
        echo $stud->save();
        return redirect('list1');
    }
}
