<?php

use App\Http\Controllers\XdataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
// Route::post('product/add' , [ProductController::class,'store']);
Route::post('data',[XdataController::class,'insert']); // insert data 

// Route::get('data/show',[XdataController::class,'viewfile']); // it is for view data

Route::get('data/{id}/shows',[XdataController::class,'show']);

 // Route::get('data/{$id}',[XdataController::class,'viewparticular']); // particluar id show data

Route::post('data/{id}/updatefiles',[XdataController::class,'updatefile']); // update by id 

Route::delete('data/{id}/delete',[XdataController::class,'deldata']); // delte data by id
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
