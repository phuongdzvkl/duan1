<?php

use Illuminate\Support\Facades\Route;

// nhúng các class controller
// controller user
use App\Http\Controllers\client\UserPageController;
// controller admin

use App\Http\Controllers\admin\AdminsController;

use App\Http\Controllers\admin\CategoryAdminController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\admin\OrdersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// client routes

Route::get('/', [UserPageController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/', function (){
        return "trang sản phẩm";
    });
    Route::get('{plug?}/{id?}',[UserPageController::class, 'getProductDetail'])->name('sanpham.productdetail');
});


// // admin routes

// các tiền tố trên url sẽ chạy các route bên dưới tương ứng với các tên tiền tố 


// route::prefix thêm 1 tiền tố đằng trước các route con của nó
Route::middleware('auth.admin')->prefix("admin")->group(function (){

    // Phương thức get sẽ check url trên thanh search nếu trùng với ts 1 sẽ chạy vào route đó
    Route::get('/', [AdminsController::class, 'index']);

    Route::get('dashboard', [AdminsController::class, 'index'])->name('home.admin');

    // tiền tố product
    Route::prefix("products")->group(function () {

        Route::get('/',[CategoryAdminController::class, 'showAddCategory']);

        // category
        Route::prefix("category")->group(function (){

            // url
            Route::get('/',[CategoryAdminController::class, 'showAddCategory']);

            // tiền tố thêm
            Route::get('add_category',[CategoryAdminController::class, 'showAddCategory'])->name('admin.category.add');

            // tiền tố edit
            Route::get('edit_category',[CategoryAdminController::class, 'showEditCategory'])->name('admin.category.edit');

            // tiền tố trásh
            Route::get('trash_category',[CategoryAdminController::class, 'showTrashCategory'])->name('admin.category.trash');


            // form
            // submit có action tương ứng sẽ chạy vào đây
            //xử lí thêm danh mục
            Route::post('handle_add_category',[CategoryAdminController::class, 'handleAddCategory']);

            // xử lí sửa id danh mục cha
            Route::post('handle_Up_categoryLevel',[CategoryAdminController::class, 'handleUpdateLevelCategory']);

            // xử lí rename danh mục
            Route::post('handle_rename_category',[CategoryAdminController::class,'handleRenameCateogory']);
            
            // xử lí xóa mềm
            Route::post('handle_remove_category',[CategoryAdminController::class,'handleRemoveCategory']);

            // xử lí khôi phục xóa mềm
            Route::post('handle_restore_category',[CategoryAdminController::class,'handleRestoreCategory']);

        });

        // product
        Route::prefix("product")->group(function (){
            Route::get('/',[ProductAdminController::class, 'showListProduct']);
           
            // 
            // tiền tố list_products
            Route::get('list_products',[ProductAdminController::class, 'showListProduct'])->name('admin.product.list');

            // tiền tố add_products
            Route::get('add_product',[ProductAdminController::class, 'showAddProduct'])->name('admin.product.add');

            // tiền tố edit_products
            Route::get('edit_product',[ProductAdminController::class, 'showEditProduct']);

            // tiền tố trash_products
            Route::get('trash_product',[ProductAdminController::class, 'showTrashProduct']);

            // form xử lí form của sản phẩm ở đây 

        });

        // xử lí tiền tố order 

        Route::prefix("orders")->group(function (){
            Route::get('order_list',[OrdersController::class, 'showListOrders'])->name('admin.orders.list');
        });

       
        
    });
    

});