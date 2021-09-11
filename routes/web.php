<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatagoriesController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[FrontendController::class,'index']);
Route::get('/about',[FrontendController::class,'about'])->name('about.page');
Route::get('/menu',[FrontendController::class,'menu'])->name('menu.page');
Route::get('/reservation',[FrontendController::class,'reservation'])->name('reservation.page');
Route::post('/reservation',[FrontendController::class,'save_reservation'])->name('save_reservation');

Route::get('/redirect',[FrontendController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
	
})->name('dashboard');
Route::get('/main',[AdminController::class,'index'])->name('dash.page');
Route::get('/user',[AdminController::class,'user'])->name('user.page');
Route::get('student/delete/{id}',[AdminController::class,'delete']);
Route::get('/add catagory',[CatagoriesController::class,'index'])->name('add.page');
Route::post('/added_food',[CatagoriesController::class,'create'])->name('added_food');
Route::get('/show_Catagory',[CatagoriesController::class,'show'])->name('show.page');
Route::get('cata/delete/{cat_id}',[CatagoriesController::class,'delete']);
Route::get('/add dish',[DishController::class,'index'])->name('add.dish');
Route::post('/save_food',[DishController::class,'create'])->name('save_dish');
Route::get('/Show dish',[DishController::class,'show'])->name('show.dish');
Route::get('dish/delete/{dish_id}',[DishController::class,'delete']);
Route::post('/update_food',[DishController::class,'update'])->name('update_dish');
Route::get('/reservationa',[AdminController::class,'reservation'])->name('reservation');
Route::get('/catagory/{cat_id}',[FrontendController::class,'show_menu'])->name('product');
Route::POST('/add',[CartController::class,'cart'])->name('add_to_cart');
Route::get('cart_show/{user_id}',[CartController::class,'cartshow']);
Route::get('/remove/{product_id}',[CartController::class,'delete']);
Route::post('/update_quantity',[CartController::class,'update'])->name('update_quantity');
Route::get('checkout',[CartController::class,'checkout'])->name('checkout.page');
Route::POST('submit',[CartController::class,'order'])->name('order_submit');
Route::get('Dashboard',[CartController::class,'myorder'])->name('myorder.page');
Route::get('view-order/{view_id}',[CartController::class,'vieworder']);
Route::get('admin_Dashboard',[CartController::class,'adminorder'])->name('admin.order');
Route::get('view_admin/{view_id}',[CartController::class,'adminvieworder']);
Route::POST('update',[CartController::class,'order_update'])->name('order.update');
Route::get('generate_pdf/{pdf_id}',[CartController::class,'downloadpdf']);
Route::get('/food_details/{food_id}',[AdminController::class,'product_details'])->name('food.details');
Route::POST('/review',[AdminController::class,'add_feedback'])->name('review.feedback');
Route::get('/feedback',[AdminController::class,'show_feedback'])->name('feedback');
Route::POST('/update_feedback',[AdminController::class,'update_feedback'])->name('update.feedback');
Route::get('delete_feedback/{feedback_id}',[AdminController::class,'feedback_delete']);
Route::get('front_review/{review_id}',[AdminController::class,'front_review_show']);
Route::get('coupon',[CouponController::class,'indexcoupon'])->name('add.coupon');
Route::POST('add_coupon',[CouponController::class,'newcoupon'])->name('addnew_coupon');
Route::get('/showall_coupon',[CouponController::class,'showcoupon']);
Route::POST('update_coupon',[CouponController::class,'updatecoupon'])->name('update.coupon');
Route::get('coupon_delete/{coupon_id}',[CouponController::class,'coupon_delete']);
Route::PoST('apply',[CouponController::class,'applynewcoupon'])->name('apply_coupon');








