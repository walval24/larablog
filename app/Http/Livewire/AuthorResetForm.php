<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorResetForm extends Component
{

    public $email, $token, $new_password, $confirm_new_password;
    public function mount(){
        $this->email = request()->email;
        $this->token = request()->token;
    }

public function ResetHandler(){
    $this->validate([
        'email'=>'required|email|exists:users,email',
        'new_password' => 'required|min:5',
        'confirm_new_password'=>'same:new_password',

    ],[
        'email.required'=>'the email field is required',
        'email.email'=> 'Invalid email address',
        'email.exists'=> 'This email is not registered',
        'new_password.required'=>'Enter the new passoword',
        'new_passsword.min'=>'Minimum 5 characters',
        'confirm_new_passoword'=>'Passwords must match'
    ]);

    $check_token = DB::table('password_reset_tokens')->where([
        'email'=>$this->email,
        'token'=>$this->token,
    ])->first();

    if(!$check_token){
        session()->flash('fail','Invalid token !');
    }else{
        User::where('email',$this->email)->update([
            'password'=>Hash::make($this->new_password)
        ]);
        DB::table('password_reset_tokens')->where([
            'email'=>$this->email
        ])->delete();

        $success_token = Str::random(64);
        session()->flash('success','Your password has been updated. Login with your email (<span>'.$this->email.
        '</span>) and your password');

        $this->redirectRoute('author.login', ['tkn'=>$success_token,'UEmail'=>$this->email]);
    }


}

    public function render()
    {
        return view('livewire.author-reset-form');
    }
}

// TODO nel token non salva l'indirizzo email sulla coda del token