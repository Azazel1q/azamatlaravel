<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryUser;
use App\Models\Order;
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
        $products = Product::where('user_id', $user->id)->get();
        $orders = Order::where('worker_id',"=", $user->id)->get();
        // dd($products);
        return view('workers.detail', ['worker'=>$user, 'products'=>$products, 'orders'=>$orders]);
    }

    public function LK() {
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->get();
        // $category = Category::where('id', $products->category_id)->get();
        // dd($products);
        return view('LK', ['lk' => $products, 'user'=> $user]);
    }
}
