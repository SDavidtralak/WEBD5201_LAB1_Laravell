<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
        //validate

        // //create and save
        // $user = User::create([

        //     'name' => request('name'),

        //     'email' => request('email'),

        //     'password' => bcrypt(request('password'))
        // ]);
        // //sign in
        // auth()->login($user);

        // \Mail::to($user)->send(new Email($user));

        //redirect to homepage;

        $request->persist();

        session()->flash('message', 'Thank you for signing up');

        return redirect()->home();
    }
}
