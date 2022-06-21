<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ChatClients;
use App\Models\UserInformation;
use App\Models\employes;
use App\Models\NavBarBlockHeader;
use Illuminate\Support\Str;
use App\Jobs\Mailqueue;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Mail;

use App\Mail\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
class UserActions extends Controller
{
  public $user;
  public function render(){
    //$this->user = Auth::user();
   
    $this->user = $this->HttpGet("user");
    return view("index");
  }

  public function HttpGet($path){
     $response = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/".$path);
     if($response->status() !=200){
      return false;
     }
     return $response->object();

  }
  public function HttpPost($path){
    Http::withToken(Cookie::get("access_token"))->post("http://127.0.0.1:8001/api/".$path);
  }
  public function LoginToApp(Request $req){
    $response = Http::post('http://127.0.0.1:8001/api/login', [
      'email' => $req->email,
      'password' => $req->password,
  ]);
  if($response->status() != 200){
      return $this->message = "kullanıcı adı veya şifre hatalı";
  }
 
  $token = $response["access_token"];
  Cookie::queue("access_token", $token,3600);
  return redirect("index");
 
}
public function AppHolidays(){
  $holidays = $this->HttpGet("holidays");
  return view("app-holidays",["holidays"=>$holidays]);
}

public function UserProfile(){
        
  
  $info = $this->HttpGet("user-profile");
  
  return view("page-profile2",["userinfo"=>$info]);
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
//$details = ['email' => 'recipient@example.com'];
dispatch(new Mailqueue(["email"=>$req->email,"mailInfo"=>$mailInfo]));
//Mail::to($req->email)->send(new PasswordReset($mailInfo));
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