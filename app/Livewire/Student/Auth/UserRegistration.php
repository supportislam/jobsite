<?php

namespace App\Livewire\Student\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class UserRegistration extends Component
{
    public $userId;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $agreeTerms = false;

    protected $rules = [
        'userId' => 'required|unique:users,user_id',
        'name' => 'required|string|max:25',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
        'agreeTerms' => 'accepted',
    ];

    public function mount()
    {
        $this->userId = session('user_id');
        $this->email = session('registration_email');

        if (!$this->userId || !$this->email) {
            return redirect()->route('new-member-registration');
        }
    }

    public function register()
    {
        $this->validate();

        User::create([
            'user_id' => $this->userId,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'remember_token' => Hash::make(Str::random(60)),
            'email_verified_at' => now(),
        ]);

        session()->forget(['registration_email', 'user_id', 'verification_token']);

        // Flash a success message to the session
        Session::flash('toast_message', 'Registration successful!');

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.student.auth.user-registration');
    }
}
