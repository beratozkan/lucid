<?php

namespace App\Http\Controllers;
use App\Models\UserInformation;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\NavBarBlockHeader;
use App\Models\userNotification;

use Auth;
use App\Models\employes;
use App\Models\User;

use Tymon\JWTAuth\Facades\JWTAuth;
class apiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','CreateUser']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
   
    protected function respondWithToken($token)
    {
        
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
        ],200);
    }
    public function employes(){
        $employe = employes::where("boss",auth()->user()["id"]);
        if($page = request()["page"]) {
            return response()->json($employe->offset(($page-1)*15)->limit(15)->get());
            
        };
        $employe = $employe->get();
        $male = $employe->where("gender","M")->count();
        $female = $employe->where("gender","F")->count();
        return response()->json(["employes"=>$employe,"female"=>$female,"male"=>$male]);

    }
    public function CreateUser(){
        $params = request(['email', 'password','name']);
        $params = User::create(['name'=>request("name"),'']);
        return $params;
    }
    public function user(){
        return response()->json(auth()->user());
    }
    public function AddEmploye(){
        $params = request(['name', 'email','phoneNumber',"gender","role"]);
        $params["boss"] = auth()->user()["id"];
        $params = employes::create(['boss'=>auth()->user()["id"],'email'=>request('email'),
        'phoneNumber'=>request('phoneNumber'),'gender'=>ucfirst(request('gender')),'job'=>request('role'),'name'=>request('name')]);
        if(!$params){
             return response()->json("hata",404);
        }
        $user = UserInformation::where("userId",auth()->user()["id"])->first();
        $user->employe_count +=1;
        $user->save();
        return response()->json("kullanıcı başarıyla eklendi",200);
    }
    public function EditEmploye(){
        $employe = employes::where("boss",auth()->user()["id"])->where("id",request("id"))->first();
        if($employe->update(request()->all())){
            $employe->save();
            return response()->json([$employe,200]);
        };
        
        return false;
    }
    public function DeleteEmploye(){
        $employe = employes::where("boss",auth()->user()["id"])->where("id",request("id"))->first();
        if($employe->delete()){
            UserInformation::where("userId",auth()->user()["id"])->first();
            return response()->json("kullanıcı başarılyla silindi",200);
        }
        return response()->json("hata");
    }
    public function testreq(){
        
    }
    public function UserProfile(){
        $userinfo = UserInformation::where("userId",auth()->user()["id"])->first();
        return response()->json([$userinfo]);
    }
    public function RowTextRight(){
        $userinfo = NavBarBlockHeader::where("userId",auth()->user()["id"])->first();
        return response()->json($userinfo);
    }  
    public function LeftSideBar(){
        $side_bar_info = UserInformation::where("userId",auth()->user()["id"])->first();
        return response()->json($side_bar_info);
    }
    public function TopNavBar(){
        $notification = userNotification::where("userId",auth()->user()["id"])->take(5)->get();
        return response()->json($notification);
    }
   
}
