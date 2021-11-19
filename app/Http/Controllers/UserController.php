<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Storage;

class UserController extends Controller
{
    public function updateProfile(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required', 'string',                    
        //     'email' => 'required', 'string', 'email',   
        //     'password' => 'string|min:8|confirmed',
        //     'profile_picture' => 'mimes:jpg,png,jpeg|max:5120',
        //     'linkedin' => 'string',
        //     'total_client' => 'numeric|min:1',
        //     'rating' => 'string',
        //     'profile' => 'text',
        //     'education_backgroound' => 'text',
        //     'job_backgroound' => 'text',
        //     'award' => 'text',
        //     'one_on_one_link' => 'string',
        //     'one_to_many_link' => 'string',
        // ]);        
        
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');        
        $user->linkedin = $request->get('linkedin');
        $user->session_hour = $request->get('session_hour');
        $user->total_client = $request->get('total_client');
        $user->rating = $request->get('rating');
        $user->profile = $request->get('profile');
        $user->education_background = $request->get('education_background');
        $user->job_background = $request->get('job_background');
        $user->award = $request->get('award');
        $user->one_on_one_link = $request->get('one_on_one_link');
        $user->one_to_many_link = $request->get('one_to_many_link');        

        if ($request->file('profile_picture')) {
            if ($user->profile_picture && file_exists(storage_path('app/public/' . $user->profile_picture))) {
                Storage::delete('public/' . $user->manifest);
            }
            $image_name = $request->file('profile_picture')->store('uploads', 'public');
            $user->profile_picture = $image_name;
        }

        $user->save();

        // 4. redirect dan tampilkan pesan sukses
        return redirect()->route('setting.profile')
            ->with('success', 'Data profil berhasil diubah');
    }
}
