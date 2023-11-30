<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    
    public function index() {
        $list = [
            'title' => "home",
        ];
        return view('client/index',$list);
    }
    public function getProductDetail($plug = null, $id = null) { 
        $list = [
            'plug' => $plug,
            'id' => $id 
        ];
        return view('client/productDetail',$list);
    }
}
