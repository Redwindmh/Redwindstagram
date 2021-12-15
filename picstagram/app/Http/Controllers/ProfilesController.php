<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        
        $user = \App\Models\User::findorFail($user);

        return view('profiles.index', ['user' => $user]);
    }

    public function edit(\App\Models\User $user) {
        return view('profiles.edit', compact('user'));   
    }
}