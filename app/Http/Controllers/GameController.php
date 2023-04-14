<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('score', 0);
        $request->session()->put('next_question', 1);
        return redirect('/questions/1');
    }
}
