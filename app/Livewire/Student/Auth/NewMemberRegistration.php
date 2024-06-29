<?php

namespace App\Livewire\Student\Auth;

use Livewire\Component;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class NewMemberRegistration extends Component
{
    public $email;
    public $confirmEmail;

    protected $rules = [
        'email' => 'required|email|unique:users',
        'confirmEmail' => 'required|same:email',
    ];

    public function sendVerificationEmail()
    {
        $this->validate();

        $userId = explode('@', $this->email)[0] . '_' . Str::random(5);
        $verificationToken = Str::random(60);

        session(['registration_email' => $this->email, 'user_id' => $userId, 'verification_token' => $verificationToken]);

        $verificationUrl = route('email.verify', ['token' => $verificationToken]);

        Mail::to($this->email)->send(new VerifyEmail($verificationUrl));

        flash()->success('Verification email sent successfully!');
    }

    public function render()
    {
        return view('livewire.student.auth.new-member-registration');
    }

    public function verifyEmail($token)
    {
        if ($token !== session('verification_token')) {
            flash()->error('Invalid verification link.');
            return redirect()->route('new-member-registration');
        }

        return redirect()->route('user-registration');
    }
}
