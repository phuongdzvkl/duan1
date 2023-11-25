<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\OrderModel;
class OrdersController extends Controller
{
    function showListOrders() {
        return view('admin/orders/listOrders');
    }
}
