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
        $date = Carbon::now()->format('d-m-Y'); //Fecha actual
        $pdf = Pdf::loadView('pdf', compact('user', 'date'));
        return $pdf->stream();


    }


}
