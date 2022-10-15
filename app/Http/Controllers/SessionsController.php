<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destory']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {


       if(! auth()->attempt(request(['email','password']))){
        return back()->withErrors([
            'message' => 'please Check your sign in info'
        ]);
       }

       return redirect()->home();

    }
    public function destory()
    {
        auth()->logout();

        return redirect()->home();
    }
}

