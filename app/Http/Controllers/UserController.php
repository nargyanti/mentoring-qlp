<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expertise;
use Auth;
use Storage;
use File;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',            
            'profile_picture' => 'mimes:jpg,png,jpeg|max:5120',            
        ]);        
        
        // dd($request->input('expertises'));

        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');        
        $user->linkedin = $request->get('linkedin');
        $user->session_hour = $request->get('session_hour');
        $user->total_client = $request->get('total_client');
        $user->rating = $request->get('rating');
        $user->description = $request->get('description');
        $user->profile = $request->get('profile');
        $user->education_background = $request->get('education_background');
        $user->job_background = $request->get('job_background');
        $user->award = $request->get('award');
        $user->one_on_one_link = $request->get('one_on_one_link');
        $user->one_to_many_link = $request->get('one_to_many_link');        

        if ($request->file('profile_picture')) {            
            if ($user->profile_picture && file_exists(public_path('img/uploads' . $user->profile_picture))) {
                // Storage::disk('public')->delete('public/' . $user->profile_picture);                
                // File::delete(public_path('img/uploads' . $user->profile_picture));
            }            
            $image_name = time().'.'.$request->file('profile_picture')->extension();              
            $request->file('profile_picture')->move(public_path('img/uploads'), $image_name);
            // $image_name = $request->file('profile_picture')->store('uploads', 'public');            
            $user->profile_picture = $image_name;
        }

        $user->save();

        $categories = $request->get('expertises');
        if($categories != null) {
            $expertise = Expertise::where('user_id', $user->id)->get();
            if($expertise != null) {                                
                Expertise::where('user_id', $user->id)->delete();
            }        
                    
            foreach($categories as $category_id){
                $expertise = new Expertise;    
                $expertise->user_id = Auth::user()->id;
                $expertise->category_id = $category_id;            
    
                $user = new User;                
                $user->id = $expertise->user_id;
                $expertise->user()->associate($user);        
                $expertise->save();   
            }         
        }        
        
        return redirect()->route('setting.profile')
            ->with('success', 'Data profil berhasil diubah');
    }

    public function updateAccount(Request $request, $id) {
        $user = User::findOrFail($id);               
        $new_password = $request->get('new_password');
        $confirmPassword = $request->get('confirmation_password');
        
        if($new_password == $confirmPassword) {
            $user->password = Hash::make($request->get('new_password'));            
            $user->save();
            return redirect()->route('setting.account')
                ->with('success', 'Password berhasil diubah');
        } else {
            return redirect()->route('setting.account')
                ->with('failed', 'Password baru yang kamu masukan tidak sama dengan konfirmasi password');
        }
    }

    public function deleteAccount($id) {
        $user = User::findOrFail($id);               
        $user->delete();
        return redirect()->route('home');
    }
}
