<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\apiController;

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




Route::group([

    'middleware' => 'api',
    

], function ($router) {
    Route::post('login', [apiController::class, 'login']);
    Route::get("employes",[apiController::class, 'employes']);
    Route::post('add-employe', [apiController::class, 'AddEmploye']);
    Route::put('edit-employe', [apiController::class, 'EditEmploye']);
    Route::get('leave-requests', [apiController::class, 'GetLeaveRequests']);
    Route::post('add-leave-requests', [apiController::class, 'AddLeaveRequsts']);
    
    Route::put('delete-employe', [apiController::class, 'DeleteEmploye']);
    Route::post('create-user', [apiController::class, 'CreateUser']);
    Route::get('user-profile', [apiController::class, 'UserProfile']);
    Route::get('row-text-right', [apiController::class, 'RowTextRight']);
    Route::get('left-side-bar', [apiController::class, 'LeftSideBar']);
    Route::get('top-nav-bar', [apiController::class, 'TopNavBar']);
    Route::get('user', [apiController::class, 'user']);
    Route::get('testreq', [apiController::class, 'testreq']);
    Route::get('holidays', [apiController::class, 'AppHolidays']);
   

});