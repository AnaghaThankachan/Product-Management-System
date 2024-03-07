<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;


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

Route::get('/', function () {
    return view('welcome');
});

#---------------------ADMIN-----------------------#

// Route::get('/login', function () {
//     return view('admin.login');
// });

// Route::get('/change_password', function () {
//     return view('admin.change_password');
// });

Route::get('login/',[admin::class,'login'])->name('login');
Route::post('login/',[admin::class,'adminlogin']);
Route::get('change_password/',[admin::class,'change_password']);


Route::group(['middleware'=>['login_middle']],function(){
    #---------------PRODUCT CATEGORY-----------------#

    Route::get('add/',[admin::class,'pro_cat_add'])->name('add');
    Route::post('add/',[admin::class,'productCat'])->name('add');
    Route::get('list/',[admin::class,'pro_cat_list'])->name('list');
    Route::get('edit/{a}',[admin::class,'pro_cat_edit'])->name('edit');
    Route::post('edit/{a}',[admin::class,'procat_edit'])->name('edit');
    Route::get('delete/{a}',[admin::class,'pro_cat_delete'])->name('delete');

    #----------------------PRODUCT-------------------#

    Route::get('pro_add/',[admin::class,'pro_add'])->name('product_add');
    Route::post('pro_add/',[admin::class,'proadd'])->name('product_add');
    Route::get('pro_list/',[admin::class,'pro_list'])->name('product_list');
    Route::get('pro_edit/{b}',[admin::class,'pro_edit'])->name('product_edit');
    Route::post('pro_edit/{b}',[admin::class,'proedit'])->name('product_edit');
    Route::get('prodelete/{a}',[admin::class,'prodelete'])->name('prodelete');

    #-------------------------BRANCH-----------------------#

    Route::get('branch_add/',[admin::class,'branch_add'])->name('branch_add');
    Route::post('branch_add/',[admin::class,'branchadd'])->name('branch_add');
    Route::get('branch_list/',[admin::class,'branch_list'])->name('branch_list');
    Route::get('branch_edit/{a}',[admin::class,'branch_edit'])->name('branch_edit');
    Route::post('branch_edit/{a}',[admin::class,'branchedit'])->name('branch_edit');
    Route::get('branch_delete/{a}',[admin::class,'branchdelete'])->name('branchdelete');
});

Route::get('logout/',[admin::class,'logout']);