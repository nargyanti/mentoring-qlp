<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User; 
use App\Models\Expertise; 
use App\Models\Category; 

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mentors()
    {        
        $expertises = Expertise::with('category', 'user')->orderBy('category_id')->get(); 
        $categories = Category::all();
        return view('mentors', ['expertises' => $expertises, 'categories' => $categories]);        
    }

    public function mentorDetail($id)
    {
        $user = User::find($id);
        $expertises = Expertise::with('category')->where('user_id', $user->id)->get();
        return view('mentor-detail', ['user' => $user, 'expertises' => $expertises]);        
    }


    public function settingProfile() {
        $user = Auth::user();
        $expertises = Expertise::with('category')->where('user_id', $user->id)->get();
        $categories = Category::all();
        return view('settings.profile', ['user' => $user, 'expertises' => $expertises, 'categories' => $categories]);
    }

    public function settingAccount() {
        $user = Auth::user();
        return view('settings.account', compact('user'));
    }
}
