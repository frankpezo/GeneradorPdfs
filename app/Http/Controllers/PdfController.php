<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{

    public function users(){
        $users = User::all();
        return view('users', compact('users'));
    }


    public function pdf(User $user){
        //$user = User::find($id);
        $pdf = Pdf::loadView('pdf', compact('user'));
        return $pdf->stream();


    }


}
