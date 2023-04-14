<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener todos los scores de la base de datos
        $scores = Score::orderBy('total', 'desc')->get();

        // Retornar la vista con los scores
        return view('scores', ['scores' => $scores]);
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

        // Asegurarse de que el usuario esté autenticado
        if (auth()->check()) {
            // Crear una nueva instancia de Score y asignar los valores apropiados
            $score = new Score([
                'total' => $request->session()->get('score'),
                'game_id' => 1,
            ]);
            $score->user()->associate(auth()->user());
            $score->save();

        }
    
        // Redirigir al usuario a la página de puntuaciones
        return redirect('/scores');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
}
