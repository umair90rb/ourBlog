<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;
use App\User;
use Mail;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.register');
    }
    public function store(RegistrationForm $form)
    {
    	 
        $form->persist();

        session()->flash('message', 'Registration Successful');

    	return redirect()->home();
    }
}
