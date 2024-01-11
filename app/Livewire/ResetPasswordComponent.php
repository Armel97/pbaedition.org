<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ResetPasswordComponent extends Component
{
    public $password, $password_confirmation;
    public function changePassword()
    {
        $data = $this->validate(
            [
                'password' => 'required|confirmed|min:6',
            ]
        );
        $this->password = bcrypt($data['password']);
        $auth = Auth::user();
        $user = User::whereId($auth->id)->first();
        $user->update([
            'password' => $this->password,
            'first_login' => false,
        ]);
        return redirect()->route('dashboard');

    }
    public function render()
    {
        return view('livewire.reset-password-component');
    }
}
