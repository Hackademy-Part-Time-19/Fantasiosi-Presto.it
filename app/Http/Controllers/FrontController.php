<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        $announcements = Announcement::latest()->take(3)->get();
        return view('welcome', compact('announcements'));
    }
    public function index()
    {
        $announcements = Announcement::all()->sortByDesc('created_at');
        $announcements =Announcement::paginate(4);
        return view('announcements.index', compact('announcements'));
    }

    public function categoryShow(Category $category){
        return view('category.show',compact('category'));

    }

    public function show(Announcement $announcement){

        return view('announcements.detail',compact('announcement'));

    }


}
