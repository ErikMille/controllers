<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Answer;
use App\Question;
class QuestionController extends Controller
{
    public function index(){
        $questions=Question::get();
        // dd($questions);
        return view('questions/index',[
            'questions'=>$questions
        ]);
        
    }
    public function show(){
        $question=Question::first();
        $answers=Answer::get();
        $answers=$question->answers;
    
        return view('questions/show',[
            'question'=>$question,
            'answers'=>$answers]);
    }
}
