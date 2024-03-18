<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\IndexAppController;
use App\Http\Controllers\DetailController;
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


//Admin Page 

//Index page

Route::get('/administrative', [IndexController::class, 'index'])->name("index");

//Create Views

Route::get('/new', [NewController::class, 'show'])->name("new");

Route::get('/new-branch', [NewController::class, 'showBranch'])->name("new-branch");

//Auth routes

Route::get('/login', [UserController::class, 'index'])->name("login");

Route::get('/logout', [UserController::class, 'logout'])->name("logout");

Route::post('/auth-login', [UserController::class, 'login'])->name("auth-login");

//App Page

Route::get('/', [IndexAppController::class, 'index'])->name("indexApp");

Route::get('/detail/{id}', [DetailController::class, 'index'])->name("edsDetail");

// Edit Views

Route::get('/edit/{page}', [NewController::class, 'editBranches'])->name("edit");

Route::get('/branch/{id}', [BranchController::class, 'branchDetailView'])->name("editBranch");