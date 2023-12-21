<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderConroller extends Controller
{
    private const ORDER_VALID = [
        'title'=> 'required|max:50',
        'description'=> 'max:50',
        'files'=> 'required',
        'client_id'=> 'required',
        'categories'=> 'required',
        'price'=> 'required|max:20|numeric',
        'date'=> 'required|max:20|numeric',
    ];
    public function index() {
        $context = Order::all();
        return view('orders.index', ['orders'=>$context]);
    }

    public function detail(Order $order) {
        $userId = User::where('id', $order->client_id)->get();
        $userAuth = Auth::user();
        $orderUser = OrderUser::all();
        // dd($userAuth);
        return view('orders.detail', ['order'=>$order, 'user'=>$userId, 'userAuth'=>$userAuth, 'ordersUsers'=>$orderUser]);
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
        $valid = $request->validate(self::ORDER_VALID);
        $categ=$valid['category'];
        Order::create(['title'=>$valid['title'], 'description'=>$valid['description'], 'files'=>$img, 'client_id'=>$valid['client_id'], 'categories'=>$categ, 'status_id'=>1, 'price'=>$valid['price'], 'date'=>$valid['date']]);

        return redirect() -> route('home');
    }

    public function createOrderUser(Request $request, OrderUser $orderUser) {
        $orderUser->create(['user_id'=>$request->worker_id, 'order_id'=>$request->order_id, 'status'=>$request->status_id]);
        return redirect()->route('orders');
    }

    public function updateStatus(Request $request) {
        $orderUser = OrderUser::where('user_id', $request->user_id)->where('order_id', $request->order_id)->first();
        if($orderUser) {
            $orderUser->fill(['status'=>$request->status]);
        }
        $orderUser->save();
        $order = Order::where('id', $request->order_id)->first();
        if($order) {
            $order->fill(['status_id'=>$request->status]);
        }
        $order->save();
        return redirect()->route('LK');
    }

    public function delete($id) {
        Order::destroy($id);
        return redirect()->route('LK');
    }
}
