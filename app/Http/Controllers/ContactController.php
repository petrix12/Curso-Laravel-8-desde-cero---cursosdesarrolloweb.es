<?php

namespace App\Http\Controllers;

use App\Mail\SendContactForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact.form');
    }

    public function send(Request $request){
        $this->validate($request, [
            "subject" => "required|string|min:5|max:100",
            "message" => "required|string|min:20|max:3000"
        ]);

        // Para ver las variables que envía el formulario
        // dd($request->input());        
        try {
            Mail::to(User::first())->send(
                new SendContactForm(
                    $request->subject,
                    $request->message
                )
            );
            return back()
                ->with("success", "El mensaje se ha enviado correctamente!");
        }catch (\Exception $exception){
            return back()
                ->with("error", "Ha fallado el envío del mensaje: " . $exception->getMessage());
        }
    }
}
