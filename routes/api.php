<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\ChipsController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UpzController;
use App\Http\Controllers\WatershedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/branches', [BranchController::class, 'index'])->name("branches");

Route::get('/ubications', [BranchController::class, 'index'])->name("ubications");

Route::get('/owners', [OwnerController::class, 'index'])->name("owners");

Route::get('/upzs', [UpzController::class, 'index'])->name("upzs");

Route::get('/watersheds', [WatershedController::class, 'index'])->name("watersheds");

Route::get('/chips', [ChipsController::class, 'index'])->name("chips");

Route::get('/filteredBranches', [BranchController::class, 'filteredBranches'])->name("filtered");

Route::get('/locations', [LocationsController::class, 'index'])->name("locations");

Route::get('/detail/{id}', [BranchController::class, 'branchDetail'])->name("branchDetail");

Route::post('/saveBranch', [BranchController::class, 'store']);

Route::post('/editBranch/{id}', [BranchController::class, 'edit']);
