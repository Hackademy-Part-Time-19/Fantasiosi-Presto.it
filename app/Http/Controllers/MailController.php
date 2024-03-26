<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class MailController extends Controller
{
    public function sendMail(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'text' => 'required|string',
            'file' => 'required|file', 
        ]);
        
        $extension=$request->file->extension();
        $file=$request->file->storeAs('public/Cv_utente' . auth::user()->id . '.' . $extension);
        

        Mail::to("admin@gmail.com")->send(new BecomeRevisor($request->name, $request->email, $request->text,$file));
        return redirect()->back()->with('message',"la mail e' stata inviata con successo");

    }

    public function revisorForm(){
        return view('revisor.richiesta');
    }
  

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ['email'=> $user->email]);
        return redirect('/')->with('message','complimenti, hai accettato ' . $user->name . ' come revisore');
    }
}
