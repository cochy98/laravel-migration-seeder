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
            'message' => 'Tutti i treni disponibili',
            'trains' => $trains
        ];
        return view('trains.index', $data);
    }

    public function currentDay()
    {
        // § Recupero tutte le instanze di 'Train' e le passo alla view interessata
        $trains = Train::where('departure_date', date('Y-m-d'))->get();
        $data = [
            'message' => 'Treni disponibili per la data odierna',
            'trains' => $trains
        ];
        return view('trains.index', $data);
    }
}
