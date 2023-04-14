<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Score;
use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request, Question $question)
    {
        return view('game', ['question' => $question]);
    }

    public function showNextQuestion(Request $request)
    {
        $answer = Answer::find($request->get('answer'));
        if ($answer->is_correct) {
            $currentScore = $request->session()->get('score');
            $request->session()->put('score', $currentScore+20);
        }
        $current = $request->session()->get('next_question');
        $request->session()->put('next_question', $current+1);
        $next = $request->session()->get('next_question');
        $nextQuestion = Question::find($next);

        if ($nextQuestion) {
            return view('game', ['question' => $nextQuestion]);
        }
        // if (auth()->check()) {
        //     // Crear una nueva instancia de Score y asignar los valores apropiados
        //     $score = new Score([
        //         'game_id' => 1,
        //         'total' => $request->session()->get('score'),
        //     ]);
        //     $score->user()->associate(auth()->user());
        //     $score->save();

        // }
        if (auth()->check()) {
            $user = auth()->user();
        
            // Buscar la puntuación del usuario para el juego 1
            $score = $user->score()->where('game_id', 1)->firstOrNew(['game_id' => 1]);
        
            // Actualizar el total
            $score->total = $request->session()->get('score');
        
            // Guardar los cambios
            $score->save();
        }
        
        return redirect()->route('scores.index');
    }





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
