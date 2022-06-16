<?php

namespace App\Http\Controllers;

use App\Models\Leretec;
use Illuminate\Http\Request;

class LeretecController extends Controller
{
    public function index(){
        $leretec = Leretec::all();
        return view('/leretec/home',['leretec' => $leretec]);
    }

    public function store(Request $request){
        $leretec = new Leretec();

        $leretec->date = $request->date;
        $leretec->name_aluno = $request->name_aluno;
        $leretec->class_aluno = $request->class_aluno;
        $leretec->grade_aluno = $request->grade_aluno;
        $leretec->title_historia = $request->title_historia;
        $leretec->cover_historia = $request->cover_historia;
        $leretec->sinopse_historia = $request->sinopse_historia;
        $leretec->historia = $request->historia;

        $leretec->save();

        return redirect('/');
    }   
}
