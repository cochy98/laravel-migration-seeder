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
        //$trains = Train::orderBy('departure_date', 'asc')->get();
        $trains = Train::orderBy('departure_date', 'asc')->paginate(15);
        $data = [
            'message' => 'Tutti i treni disponibili',
            'trains' => $trains
        ];
        return view('trains.index', $data);
    }

    public function currentDay()
    {
        // § Recupero tutte le instanze di 'Train' e le passo alla view interessata
        $trains = Train::where('departure_date', date('Y-m-d'))->paginate(15);
        $data = [
            'message' => 'Treni disponibili per la data odierna',
            'trains' => $trains
        ];
        return view('trains.index', $data);
    }

    public function details($id)
    {
        // § Recupero tutte le instanze di 'Train' e le passo alla view interessata
        $train = Train::find($id);
        $data = [
            'message' => 'Dettaglio treno',
            'train' => $train
        ];
        return view('trains.show', $data);
    }
}
