<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function workers() {
        $context = ['Users'=>User::latest()->get()];
        return view('workers.index', $context);
    }

    public function profileWorker(User $user) {
        return view('workers.profile', ['worker'=>$user]);
    }
}
