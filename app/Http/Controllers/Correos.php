<?php

namespace App\Http\Controllers;

use App\Mail\NotificarUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Correos extends Controller
{
    public function send_correo(Request $request){

        Mail::to(env('MAIL_PROPIO'))->send(new NotificarUser($request->asunto,$request->cuerpo));
        return 'Enviado correctamente';
    }
}
