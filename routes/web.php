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
Route::get("sockettest",function(){
    return view("test-websocket");
});
Route::get("/password_reset",function(Request $request){
    return view("password-reset",["email"=>$request->email]);
    //return response()->json([$request->email]);
})->middleware("tokenControl");
Route::get('/', function () {
    return redirect("loginpage");
})->middleware("AuthCheck");

//Route::post("/login",[UserActions::class,"LoginToApp"]);
Route::get("/index",[UserActions::class,"render"]);

Route::get("/index2",function(){
    return view("test-websocket");
});
Route::get('/page-register',function(){
    return view("page-register");
});
Route::get('/logout',[UserActions::class,"LogoutFromApp"]);
Route::get("/loginpage",function(){
    return view("login");
});
Route::get("/loginpage2",function(){
    return view("login2");
});
Route::get("/user-profile",[UserActions::class,"UserProfile"]);
Route::post('register',[UserActions::class,"RegisterToApp"]);
Route::post("update-general");
Route::post("/login",[UserActions::class,"LoginToApp"]);

Route::get("client-add",[UserActions::class,"ClientAdd"]);
Route::get("app-holidays",[UserActions::class,"AppHolidays"]);

Route::post("pusher/auth",[UserActions::class,"pusherAuth"]);
Route::post("change-password",[UserActions::class,"PasswordResetUser"]);
Route::post("/password-reset-mail",[UserActions::class,"PasswordResetMail"]);
Route::get("page-forgot-password",[UserActions::class,"PasswordReset"]);
Route::get("/emp-departments",[UserActions::class,"EmpDepartments"]);
Route::get("/app-chat",[UserActions::class,"UserChat"])->middleware("AuthCheck");
Route::get('/employe-all', [EmployeController::class,"index"]);

Route::get('/emp-leave', function(){

    return view("employe-leave");
});
//Route::post("/employe-add",[EmployeController::class,"AddNewEmploye"]);
//Route::get("/employe-delete/{id}",[EmployeController::class,"deleteEmploye"]);
//Route::get("/employe-delete",[ShowEmployes::class,"deleteEmploye"]);