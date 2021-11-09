<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat method index
    public function index () {
        return view("person.index");
    }
}
