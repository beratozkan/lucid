<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserActions;
use App\Http\Controllers\EmployeController;
use App\Http\Livewire\ShowEmployes;
use App\Http\Livewire\TestLive;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Livewire\EmpDepartman;
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
Route::get("/password_reset",function(Request $request){
    return view("password-reset",["email"=>$request->email]);
    //return response()->json([$request->email]);
})->middleware("tokenControl");
Route::get('/', function () {
    return redirect("loginpage");
})->middleware("AuthCheck");
Route::post("/login",[UserActions::class,"LoginToApp"]);
Route::get("/index",[UserActions::class,"render"])->middleware("AuthCheck");

Route::get('/page-register',function(){
    return view("page-register");
});
Route::get('/logout',[UserActions::class,"LogoutFromApp"]);
Route::get("/loginpage",function(){
    return view("login");
});
Route::get("/user-profile",[UserActions::class,"UserProfile"])->middleware("AuthCheck");
Route::post('register',[UserActions::class,"RegisterToApp"]);
Route::post("update-general");
Route::get("/test2",function(){
    return view("test2");
});
Route::get("/test",function(){
    return view("test");
});
Route::post("change-password",[UserActions::class,"PasswordResetUser"]);
Route::post("/password-reset-mail",[UserActions::class,"PasswordResetMail"]);
Route::get("page-forgot-password",[UserActions::class,"PasswordReset"]);
Route::get("/emp-departments",[EmpDepartman::class,"render"]);
Route::get("/app-chat",[UserActions::class,"UserChat"]);
Route::get('/employe-all', [EmployeController::class,"index"]);
Route::get('/employe-leave', [EmployeController::class,"index"]);
//Route::post("/employe-add",[EmployeController::class,"AddNewEmploye"]);
//Route::get("/employe-delete/{id}",[EmployeController::class,"deleteEmploye"]);
//Route::get("/employe-delete",[ShowEmployes::class,"deleteEmploye"]);