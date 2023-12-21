<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryUser;
use App\Models\Order;
use App\Models\OrderUser;
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
        $orders = Order::where('client_id', $user->id)->get();
        // dd($orders);
        return view('workers.detail', ['worker'=>$user, 'orders'=>$orders]);
    }

    public function LK() {
        $user = Auth::user();
        $users = User::all();
        $orders = Order::where('client_id', $user->id)->get();

        if(OrderUser::where('user_id', $user->id)->where('status', '2')->get()) {
            $myOrdersUsers = OrderUser::where('user_id', $user->id)->where('status', '2')->get();
        } else {
            $myOrdersUsers = null;
        }

        // dd($orders);
        return view('LK', ['myOrderUsers' => $myOrdersUsers, 'user'=> $user,'users'=>$users, 'orders'=>$orders]);
    }
}
