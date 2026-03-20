<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController
{
    //The function above is to get all the orders
    public function index(){

        $orders = Order::with(['agent', 'network', 'package'])->paginate(5);

        $stats = [
            'total' => Order::count(),
            'pending' => Order::Pending()->count(),
            'completed' => Order::Completed()->count(),
            'failed' => Order::Failed()->count()            

        ];

        return view('admin.orders', conpact('orders', 'stats'));
    }
}
