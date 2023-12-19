<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderConroller extends Controller
{
    public function index() {
        $context = ['orders'=> Order::all()];
        return view('orders.index', $context);
    }

    public function detail(Order $order) {
        $userId = User::where('id', $order->client_id)->get();
        return view('orders.detail', ['order'=>$order, 'user'=>$userId]);
    }

    public function orderForm() {
        if(Auth::check()) {
            return view('orders/orderForm', ['categories'=> Category::all()]);
        } else {
            return redirect()->route('login');
        }
    }

    public function create(Request $request) {
        $img = $request->file('files')->hashName();
        $categ=$request->category;
        Order::create(['title'=>$request->title, 'description'=>$request->title, 'files'=>$img, 'client_id'=>$request->client_id, 'categories'=>$categ, 'status_id'=>1, 'price'=>$request->price, 'date'=>$request->date]);
        return redirect() -> route('home');
    }

    public function updateStatus(Request $request, Order $order) {
        $userId = Auth::user()->id;
        $order->fill([
            'status_id'=>$request->status_id,
            'worker_id'=>$request->$userId,
        ]);
        $order->save();
        return redirect()->route('home');
    }
}
