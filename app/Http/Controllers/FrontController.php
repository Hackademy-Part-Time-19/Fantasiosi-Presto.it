<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        $announcements = Announcement::Where('is_accepted',true)->latest()->take(3)->get();
        return view('welcome', compact('announcements'));
    }
   

    public function categoryShow(Category $category){
        return view('category.show',compact('category'));

    }

    public function show(Announcement $announcement){

        return view('announcements.detail',compact('announcement'));

    }

    public function searchAnnouncements(Request $request){

        $announcements=Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);

        return view('announcements.index',compact('announcements'));
    }


}
