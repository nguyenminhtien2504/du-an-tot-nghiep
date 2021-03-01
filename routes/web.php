<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Dashboad
Route::get('/dashboard', 'Admin\HomeController@admin' )->name('admin.home');

// Member
Route::get('/member', 'Admin\MemberController@listMember')->name('admin.listMember');
Route::get('/member/add-member', 'Admin\MemberController@addMember')->name('admin.addMember');
Route::get('/member/edit-member', 'Admin\MemberController@editMember')->name('admin.editMember');