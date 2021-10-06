<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío
use Carbon\Carbon;

class EmailController extends Controller
{

    public function contact(Request $request){

        $today = Carbon::now()->format('m-d');

        $subject = "Cierre de actividades"." ".$today;
        $for = "gerenciadeproyectos@fungrupoestudio.org";
        $copia = "asistentegerencia@ipssanlucas.com.co";
        Mail::send('email', $request->all(), function($msj) use ($subject, $for, $copia) {
            $msj->from("callcenter@gmail.com", "Argenedis Alvarez");
            $msj->subject($subject);
            $msj->to($for);
            $msj->cc($copia);
        });
        session()->flash('message', 'Correo enviado correctamente.');
        return redirect()->back();
    }
}