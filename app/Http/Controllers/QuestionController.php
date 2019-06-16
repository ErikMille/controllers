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
        //dd($questions);
        return view('questions/index',[
            'questions'=>$questions
        ]);
        
    }
    public function show($id){
        $question=Question::find($id);
        return view('questions/show',[
            'question'=>$question]);
    }
}
