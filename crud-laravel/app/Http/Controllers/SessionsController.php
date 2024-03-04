<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if(auth()->attemp(request(['email','email']))==false)
        {
            return back()->whitErrors(['message' =>'The email or password is incorrect']);     
        }
        return redirect()->to('/');
    }

    public function destroy ()
    {
        auth()->logout();

        return redirect()->to('/');
    }
}