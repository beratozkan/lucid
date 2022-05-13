<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserInformation;
use App\Models\employes;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
class UserActions extends Controller
{
  public $user;
  public function render(){
    $this->user = Auth::user();
   
    //$employeCount = count($employes);
    return view("index");
  }
  
  public function LoginToApp(Request $req){
      
    $user = $req->all();
    
    if(Auth::attempt($user)){
      $this->user = Auth::user();
      return view("index",["user"=>$this->user]);
    }
    else{
        return redirect("/");

    }
}
public function UserChat(){

  return view("app-chat");
}
public function RegisterToApp(Request $req){
  $validated = $req->validate(["name"=>"required","email"=>"required","password"=>"required"]);
  User::create(["name"=>$req->name,"email"=>$req->email,"password"=>bcrypt($req->password)]);
  
}
public function UserProfile(){
  $info = UserInformation::findOr(Auth::user()["id"],function(){
    UserInformation::create(["userId"=>$this->user["id"]]);

 });
  
  return view("page-profile2",["userinfo"=>$info,"count"=>2]);
}
public function LogoutFromApp(){
  Auth::logout();
  return redirect("/");
}
public function UpdateUserInfo(){
  
}
}