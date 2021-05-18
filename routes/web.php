<?php

use Illuminate\Support\Facades\Route;
use App\Models\KhuyenMai;
use App\Http\Controllers\KhuyenMaiController;

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
    return view('admin.index');
});
Route::get('/tables', function () {
    return view('admin.tables');
});
Route::get('/charts', function () {
    return view('admin.charts');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/register', function () {
    return view('admin.register');
});
Route::get('/password', function () {
    return view('admin.password');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/401', function () {
    return view('admin.401');
});
Route::get('/404', function () {
    return view('admin.401');
});
Route::get('/500', function () {
    return view('admin.500');
});
Route::get('/layout-static', function () {
    return view('admin.layout-static');
});
Route::get('/layout-sidenav-light', function () {
    return view('admin.layout-sidenav-light');
});
Route::resource("khuyenmai", KhuyenMaiController::class);