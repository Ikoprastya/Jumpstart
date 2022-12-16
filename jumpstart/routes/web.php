<?php

use App\Http\Livewire\Component\Header;
use App\Http\Livewire\Pages\Admin\ManageProduct;
use App\Http\Livewire\Pages\Admin\ManageTransaction;
use App\Http\Livewire\Pages\Admin\ManageUser;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Login;
use App\Http\Livewire\Pages\Order\OrderDetail;
use App\Http\Livewire\Pages\Order\SuccessOrder;
use App\Http\Livewire\Pages\Product;
use App\Http\Livewire\Pages\Product\ProductDetail;
use App\Http\Livewire\Pages\Registration;
use App\Http\Livewire\Pages\User\ChangePassword;
use App\Http\Livewire\Pages\User\ChartUser;
use App\Http\Livewire\Pages\User\UserDetail;
use App\Http\Livewire\Pages\User\UserProfile;
use Illuminate\Support\Facades\Route;

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


Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/logout', [Header::class, 'logOut'])->name('logout');
Route::get('/signup', Registration::class)->name('registration');

Route::get('/product', Product::class)->name('product');
Route::get('/product/detail', ProductDetail::class)->name('product.detail');

Route::get('/user/profile', UserProfile::class)->name('user.profile');
Route::get('/user/changepassword', ChangePassword::class)->name('user.changepassword');
Route::get('/user/detail', UserDetail::class)->name('user.detail');
Route::get('/user/chart', ChartUser::class)->name('user.chart');

Route::get('/order/detail', OrderDetail::class)->name('order.detail');
Route::get('/order/success', SuccessOrder::class)->name('order.seccess');

Route::get('/admin/manage/user', ManageUser::class)->name('admin.manage.user');
Route::get('/admin/manage/product', ManageProduct::class)->name('admin.manage.product');
Route::get('/admin/manage/transaction', ManageTransaction::class)->name('admin.manage.transaction');


