<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat method index
    public function index () {
        return view("person.index");
    }
    public function add() 
    {
        return view('person.add');
    }

    public function addProcess(Request $request)
    {
        $this->validate($request,[
            'person_name' => 'required|max:30',
            'person_email' => 'required|email'
        ]);

        return_view('person.show',['data' => $request]);
    }
}
