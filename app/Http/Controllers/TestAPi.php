<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use App\Models\User;
use App\Models\UserInformation;

use App\Models\NavBarBlockHeader;

use GuzzleHttp\Client;

use Auth;
class TestAPi extends Controller
{
    public $client;
    

    public function CreateClient(){
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => "127.0.0.1",
            // You can set any number of default request options.
            
        ]);
        
    }

    public function testapi(){
        //$url = $host."/employes";
        if(!isset($this->client)){
            $this->CreateClient();
        }
       
        $response = $this->client->get($url);
        return $response->getBody();
    }
  
   
   
        public function userProfile() {
            return response()->json(auth()->user());
        }
        
        
    
    public function employes(){
        if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
    }
    return response()->json(compact('user'));
    }
    
    public function RowTextRight(Request $request){
        
        $user = Auth::user();
        $user = $req->user();
        return $user;
      
    }
    
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            
            'user' => auth()->user()
        ]);
    }
    public function LoginToApp(Request $req){
        $user = $req->all();
        //dd($user->email);
        if(Auth::attempt($user)){
            $user = Auth::user();
            $token = $user->createToken('api_token')->plainTextToken;
            return redirect("index")->with("token",$token);
            //return view("index",["user"=>$user]);
            
     
     }


          
          else{
              return redirect("/");
      
              
          }
        /*  if(!isset($this->client)){
            $this->CreateClient();
        }
        //$response = Http::post("http://127.0.0.1:8001/login/",["email"=>$user["email"],"password"=>$user["password"]]);
        //$response = $this->client->post("http://127.0.0.1:8001/login/",["email"=>$user["email"],"password"=>$user["password"]]);
        $response = $this->client->request('POST', 'http://127.0.0.1:8001/login', ['form_params' => [
            'email' => $user["email"],
            'password' => $user["password"]
        ]]);
        if($response->getBody()){
           
            
           
            return redirect('/api/profile')->with("api_token",$response->getBody());

            //$api_token = $response->body();
            //return view("index",["api_token"=>$api_token]);
            //return $user;
            //Auth::loginUsingId($user["user"]["id"], true);
            //return view("index",["user"=>$user]);*/
        }
        public function login(Request $request)
        {
            $input = $request->only('email', 'password');
            $jwt_token = null;
     
            if (!$jwt_token = JWTAuth::attempt($input)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid Email or Password',
                ], 401);
            }
     
            return response()->json([
                'success' => true,
                'token' => $jwt_token,
                'user' => auth()->user()
            ]);
        }
        public function authenticate(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            if (! $token = auth()->attempt($validator->validated())) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return $this->createNewToken($token);}

 
    }

