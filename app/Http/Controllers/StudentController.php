<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $code = '190613014';
    private $name = 'Vinny Lindawaty';
    private $course, $task, $quiz, $mid_term, $final, $grade;

    public function myCourse($course, $task, $quiz, $mid_term, $final) {

        this->course = $course;
        this->task = $task;
        this->quiz = $quiz;
        this->mid_term = $mid_term;
        this->final = $final;
        this->grade = $this->calculateGrade();
        return view('student/myview',['code'=>$this->code,
}
