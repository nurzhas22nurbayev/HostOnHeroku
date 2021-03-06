<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        echo 'akjfnakjfna';
    }


    // THREE FUNCTIONS 
    public function getName()
    {
        return view('stu_one', ['name' => "Nurzhas"]);
    }

    public function getDate()
    {
        return view('stu_two')->with('date','2002-06-22');
    }   

    public function getAge($age = 7)
    {
        return view('stu_three', compact('age'));
    }
    /*--------------------------------------------------------*/
    
    public function get_students()
    {
        static $students = array(0 => "Athos", 1 => "Porthos", 2 => 
        "Aramis");
        return $students;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = $this->get_students();
        return view("student_info", ["name" => $students[$id]]);
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
