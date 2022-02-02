<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{

    public function __constructor() {
        $this.middleware('auth');
    }

    public function store(\App\Models\User $user) {
        return auth()->user()->following()->toggle($user->profile);
    }
}

