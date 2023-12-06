<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryUser;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Main() {
        $workers = ['workers'=>User::where('category_user',"=", 2)->get()];
        $categories = ['categories'=>Category::all()];
        return view('home', $workers, $categories);
    }

    public function workers() {
        $context = ['Users'=>User::where('category_user',"=", 2)->get()];
        return view('workers.index', $context);
    }

    public function detail(User $user) {
        return view('workers.detail', ['worker'=>$user]);
    }

    public function LK() {
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->get();
        // $category = Category::where('id', $products->category_id)->get();
        $category_user = CategoryUser::where('id', $user->category_user)->get();

        return view('LK', ['lk' => $products, 'user'=> $user, 'category_user'=> $category_user]);
    }
}
