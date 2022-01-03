<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
    function show(){
        // DB::insert('insert into students (name,email,city) values (?, ?,?)', ['Nabeel','nabeel@gmail.com','karachi']);
        //using name name
        // DB::insert('insert into students (name,email,city) values (:name,:email,:city)', ['name'=>'Humna','email'=>'humna@gmail.com','city'=>'karachi']);
       
        //using Variable
        // $name='Naveed';
        // $email='naveed@gmail.com';
        // $city='Mardan';

        // DB::insert('insert into students (name,email,city) values (:name,:email,:city)', ['name'=>$name,'email'=>$email,'city'=>$city]);

//DB::update('update students set city = ? where id = ?', ['DHA',3]);
//DB::update('update students set email = ? where id = ?', ['atif@gmail.com',6]);
// DB::update('update students set email = :email where id = :id', ['email'=>'hk147471@gmail.com','id'=>1]);

//DB::delete('delete from students where id = ?', [8]);
//using name name
//DB::delete('delete from students where id = :id', ['id'=>7]);

//DB::unprepared('delete  form students where id=5');

DB::transaction(function () {
    // DB::update('update students set name = :name where id = :id', ['name'=>'John','id'=>6]);
    DB::delete('delete from students where id = :id', ['id'=>3]);
});

        $students=DB::select('select * from students');
      //  $students=DB::select('select * from students where city= ?',['Multan']);
      //  $students=DB::select('select * from students where id= ?',[1]);
      //  dd($students);
        return view('students',['students'=>$students]);
    }
}
