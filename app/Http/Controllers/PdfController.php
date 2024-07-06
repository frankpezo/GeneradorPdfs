<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function pdf(){

     $users =  User::all();
     $pdf = Pdf::loadView('pdf', compact('users'));

     return $pdf->stream();
        //return view('pdf');
    }
}
