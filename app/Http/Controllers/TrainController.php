<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// § Importo la classe 'Train'
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        // § Recupero tutte le instanze di 'Train' e le passo alla view interessata
        $trains = Train::all();
        $data = [
            'trains' => $trains
        ];
        return view('trains.index', $data);
    }
}
