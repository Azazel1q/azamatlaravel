<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id) {
        $category = Category::find($id)->orders()->where('status_id', '1')->get();
        return view("categories.index", ['orders'=>$category]);
    }
}
