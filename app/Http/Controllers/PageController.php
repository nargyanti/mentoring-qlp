<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

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
        $users = User::all();
        return view('mentors', compact('users'));        
    }

    public function mentorDetail($id)
    {
        $user = User::find($id);
        return view('mentor-detail', compact('user'));        
    }


    public function settingProfile() {
        $user = Auth::user();
        return view('settings.profile', compact('user'));
    }

    public function settingAccount() {
        $user = Auth::user();
        return view('settings.account', compact('user'));
    }
}
