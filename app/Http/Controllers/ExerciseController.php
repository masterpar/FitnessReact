<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        return Exercise::all();
    }

    public function store()
    {
//        dd($request);
        $this->validate(\request(),[
            'title' => 'required',
            'description' => 'required',
            'img' => 'required',
            'leftColor' => 'required',
            'rightColor' => 'required',
        ]);
        Exercise::create(request()->all());
        return response('success Add',200);
    }

}
