<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QuestionController extends Controller
{
    public function index(){
        $query=DB::table('answers')->get();
        dd($query);
        return 'This is the list of questions';
    }
    public function show(){
        $query=DB::table('answers')
            ->where('user_id', 1)
            ->select('id')
            ->get();
        dd($query);
        return 'This is a detail of a question';
    }
}
