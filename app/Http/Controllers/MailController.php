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

        $data= $request->all();
        Mail::to("$request->email")->send(new BecomeRevisor($request->name, $request->email, $request->text));
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
