<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Transaction\TransactionController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// apiResource funciona igual que Resource, pero este omite los metodos 
// create y edit ya que en apirest no son utilizados.

// Route::apiResource('buyers', BuyerController::class)->only(['index', 'show']);
// Route::apiResource('sellers', SellerController::class)->only(['index', 'show']);

Route::apiResources([
    'buyers' => BuyerController::class,
    'sellers' => SellerController::class,
    'products' => ProductController::class,
    'transactions' => TransactionController::class,
], ['only' => ['index', 'show']]);

Route::apiResources([
    'categories' => CategoryController::class,
    'users' => UserController::class,
]);
