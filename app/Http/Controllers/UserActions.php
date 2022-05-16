<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserInformation;
use App\Models\employes;
use App\Models\NavBarBlockHeader;
use Illuminate\Support\Str;


use Illuminate\Support\Facades\Mail;

use App\Mail\PasswordReset;
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

  $user = User::create(["name"=>$req->name,"email"=>$req->email,"password"=>bcrypt($req->password)]);
  $user= $user->fresh();
  UserInformation::create(["name"=>$req->name,"userId"=>$user->id]);
  NavBarBlockHeader::create(["userId"=>$user->id]);
  
  return redirect("/");
}
public function UserProfile(){
  $info = UserInformation::findOr(Auth::user()["id"],function(){
    UserInformation::create(["userId"=>Auth::user()["id"],"name"=> Auth::user()["name"]]);

 });
  
  return view("page-profile2",["userinfo"=>$info,"count"=>2]);
}
public function LogoutFromApp(){
  Auth::logout();
  return redirect("/");
}
public function UpdateUserInfo(){
  
}
public function PasswordReset(){
  return view("forget-password");
}
public function PasswordResetMail(Request $req){
  
 $user = User::where("email",$req->email)->first();
 if(!$user){
  return response()->json(["boyle bir kullanici yok"]);
 }
  $r_token = Str::random(20);
  
  $user->remember_token = $r_token;
  $user->save();
  $mailInfo = [
    'title' => 'şifre sıfırlama',
    'url' => "http://127.0.0.1:8000/password_reset?email=".$req->email."&token=".$r_token,
];
Mail::to($req->email)->send(new PasswordReset($mailInfo));
return redirect("/");
}
public function PasswordResetUser(Request  $req){
    if($req->password != $req->r_password){
      return response()->json(["şifreler aynı olmalıdır",$req->email]);
    }
    $user = user::where("email",$req->email)->first();
    $user->password = bcrypt($req->password);
    $user->remember_token = "";
    $user->save();
    return redirect("/");
}

}