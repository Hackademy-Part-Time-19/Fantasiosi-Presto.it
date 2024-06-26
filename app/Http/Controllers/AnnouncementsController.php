<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementStoreRequest;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  

    $announcements = Announcement::where('is_accepted', true)
    ->orderByDesc('created_at')
    ->paginate(4);
        return view('announcements.index', compact('announcements'));
    }

    public function create(){

        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnouncementStoreRequest $request)
    {
        $validated = $request->validated();
        $announcement=Announcement::create($validated);

        

        return redirect()->back()->with('success', 'Annuncio caricato con successo');
    }

  
}
