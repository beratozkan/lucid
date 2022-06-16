<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function UserChat(){
        $chats = ChatClients::where("user_from",Auth::user()["id"])->get();
        return view("app-chat",["chats"=>$chats]);
      }
      
      
      public function ClientAdd(){
      
        return view("add-client");
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
      public function EmpDepartments(){
        return view("emp-department");
      }
    public function pusherAuth(Request $req){
        $string = $req->socket_id.":".$req->channel_name;
        $secret = "4f1a031a0ee8d4666897";
        $last  =hash_hmac("sha256",$string,$secret);
        return response()->json(["auth"=>"fbf2aca016a814d58384:".$last,"user_info"=>"{\"id\":\"12345\"}"]);
      }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function RegisterToApp(Request $req){
        $validated = $req->validate(["name"=>"required","email"=>"required","password"=>"required"]);
        $token = str::random(20);
        $user = User::create(["name"=>$req->name,"email"=>$req->email,"password"=>bcrypt($req->password),"api_token"=>$token]);
        $user= $user->fresh();
        UserInformation::create(["name"=>$req->name,"userId"=>$user->id,"email"=>$req->email]);
        NavBarBlockHeader::create(["userId"=>$user->id]);
        
        return redirect("/");
      }

      public function UserProfile(){
        
        $info = UserInformation::findOr(Auth::user()["id"],function(){
          UserInformation::create(["userId"=>Auth::user()["id"],"name"=> Auth::user()["name"]]);
      
       });
        
        return view("page-profile2",["userinfo"=>$info]);
      }
}
