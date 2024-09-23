<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Worker;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $workers = Worker::all();
        $orders = Order::all();
        return view('admin-panel.dashboard', compact('categories', 'workers', 'orders'));
    }
}