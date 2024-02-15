<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use DateTime;

class TrainController extends Controller
{
    public function index()
    {
        $now = new DateTime(); // salvo la data odierna in una variabile
        $today = $now->format('Y-m-d'); // formatto la data odierna in una stringa e la salvo nella variabile $today

        $trains = Train::where('departure_time', 'like', $today . '%')->orderBy('departure_time', 'asc')->get();

        return view('home', compact('trains'));
    }
}
