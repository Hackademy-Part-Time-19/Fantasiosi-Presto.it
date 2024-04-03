<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function welcome()
    {


        // Verifica se l'utente è autenticato
        if (Auth::check()) {
            $authentication = Auth::check();
            $announcements = Announcement::where('is_accepted', true)->latest()->take(3)->get();
            // Se l'utente è autenticato, restituisci la vista con l'indicatore di autenticazione
            return view('welcome', compact('authentication', 'announcements'));
        }

        // Se l'utente non è autenticato, restituisci la vista normale con gli annunci
        $announcements = Announcement::where('is_accepted', true)->latest()->take(3)->get();
        return view('welcome', compact('announcements'));
    }


    public function categoryShow(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function show(Announcement $announcement)
    {



        return view('announcements.detail', compact('announcement'));
    }

    public function searchAnnouncements(Request $request)
    {

        if ($request->filled('searched')) {
            $initialLetters = substr($request->searched, 0, 2); // Prendi solo le prime due lettere dalla stringa di ricerca
            $announcements = Announcement::where('is_accepted', true)
                ->where('title', 'like', $initialLetters . '%') // Corrispondenza alle prime due lettere del titolo
                ->paginate(10);
        } else {
            // Se la stringa di ricerca è vuota o non presente, recuperare tutti gli annunci accettati
            $announcements = Announcement::where('is_accepted', true)->paginate(10);
        }
        return view('announcements.index', compact('announcements'));
    }

    public function setLanguage($lang)
    {
        $tLang=$lang;
        
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
