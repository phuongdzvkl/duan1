<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin\ProductsModel;

class ProductAdminController extends Controller
{
    public function __construct() {
    }

    // phương thức(GET) hiện thị các page sản phẩm
    public function showListProduct() {
        return view("admin/product/listProduct");
    }

    public function showAddProduct() {
        return view("admin/product/addProduct");
    }

    public function showEditProduct() {
        return view("admin/product/editProduct");
    }

    public function showTrashProduct() {
        return view("admin/product/trashCategory");
    }

    // phương thức(POST) xử lí các form danh mục

    public function handleAddProduct() {
        
    }
    public function handleRemoveProduct() {
        
    }

    public function handleRestoreProduct() {
        
    }

    public function handleDeleleProduct() {
        
    }

   
}
