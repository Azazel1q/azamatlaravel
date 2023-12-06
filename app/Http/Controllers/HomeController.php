<?php

namespace App\Http\Controllers;

use App\Models\CategoryUser;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        // dd(auth()->user());
        return view("index");
    }

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('home', ['workers'=> User::all()]);
    }
}
