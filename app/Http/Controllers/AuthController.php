<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login');
    }
    public function addUser(Request $request){
        $request->validate([
                'email' => 'required|unique:users,email',
                'fullname' => 'required',
            ]
        );

        $request['password'] = bcrypt('password');

       try {
        $collection = collect($request);
        $user = User::create($collection->all());
       } catch (\Throwable $th) {
        //throw $th;
       }
        return redirect()->back()->with('success', 'Utilisateur ajouté avec succès');
    }
    public function logUser(Request $request){
        $this->validate($request, [
            'email' => 'bail|required',
            'password' => 'required',
        ]);
        $role = 'Dirigeant';
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($credentials)) {
            $user = User::findOrFail(Auth::id());
           
            if ($user->status !='Actif') {
                return view('compte-suspendu');
            }
            if ($user->first_login==true) {
                return redirect()->route('reset-password');
            }
            $token = $user->createToken($user->email . '-' . now(),[$role]);

            // if (isset($request->remember_me)) {
            //     $token->expires_at = Carbon::now()->addWeeks(1);
            // }

            // if ($token->token->save()) {
            //     $data = [
            //         'token' => $token->accessToken,
            //         'role' => $role,
            //         'expires_at' => Carbon::parse($token->token->expires_at)->format('d.m.Y H:s:i'),
            //     ];
            // }
            
            return redirect()->route('dashboard');
            
        } else {
            return redirect()->route('login');
            
        }

    }  
    
    public function resetPassword(){
        return view('resetPassword');
    }
    public function logout(Request $request)
    {
        // Logout the authenticated user
        Auth::logout();

        // Clear the user session data
        $request->session()->flush();

        // Regenerate the session ID to prevent session fixation attacks
        $request->session()->regenerate();

        // Redirect to the login page or any other page as needed
        return redirect()->route('login');
    }
}
