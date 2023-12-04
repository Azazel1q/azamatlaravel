<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function workers() {
        $context = ['Users'=>User::latest()->get()];
        return view('workers.index', $context);
    }

    public function detail(User $user) {
        return view('workers.detail', ['worker'=>$user]);
    }

    public function LK()
    {
        return view('LK', ['lk' => Auth::user()->product()->latest()->get()]);
    }
}
