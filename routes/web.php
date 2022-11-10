<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubController;

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

Route::get("/", [PubController::class, "index"]);
Route::get("/uj-ital",[PubController::class,"newDrink"]);
Route::post("/submit-drink",[PubController::class,"storeDrink"]);
// Route::get("/keres", [PubController::class, "showDrink"]);
// Route::get("/show-update-drink", [PubController::class, "showUpdateDrink"]);
// Route::get("/update-drink", [PubController::class, "updateDrink"]);
// Route::get("/delete-drink", [PubController::class, "deleteDrink"]);
