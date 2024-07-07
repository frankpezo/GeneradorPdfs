<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon; // Para la fecha

class PdfController extends Controller
{

    public function users(){
        $users = User::all();
        return view('users', compact('users'));
    }


    public function pdf(User $user){
        Carbon::setLocale('es'); // Idioma de la fecha
        $date = Carbon::now()->format('d-m-Y'); //Fecha actual
        $dia = Carbon::now()->format('d'); //Dia actual
        $mes = Carbon::now()->translatedFormat('F'); //Mes actual
        $anio = Carbon::now()->format('Y'); //Año actual
        $pdf = Pdf::loadView('pdf', compact('user', 'date', 'dia', 'mes', 'anio'));
        return $pdf->stream();


    }


}
