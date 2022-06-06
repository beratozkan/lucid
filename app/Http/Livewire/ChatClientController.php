<?php

namespace App\Http\Livewire;
use App\Models\ChatClients;
use App\Models\UserChat;
use App\Models\UserInformation;
use Livewire\Component;
use App\Events\socket1;

use Auth;
class ChatClientController extends Component
{   
    public $userinfo;
    public $user_messages = [];
    public $message;
    public $chat;
   

    public function render()
    {
        
        $user = $this->GetUserInfo($this->chat->user_to);
        return view('livewire.chat-client-controller',["user"=>$user]);
    }  
    public function showMessages(){
       //dd($id);
        $this->emit("UserMessage");
    }

    public function GetUserMessages(){
        
        $this->emit("UserMessage",["id"=>$this->chat->user_to]);
        
        
        
    }
    public function GetUserInfo($id){
        return UserInformation::where("userId",$id)->first();
    }
  
  
   
}
