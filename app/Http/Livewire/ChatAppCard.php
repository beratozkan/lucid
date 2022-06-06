<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserChat;
use App\Models\User;

use App\Models\ChatClients;
use App\Events\SendMessage;


use Auth;
class ChatAppCard extends Component
{

    protected $listeners = ["renderMessage"=>"render","UserMessage"=>"GetUserMessages"];
    public $user_messages = [];
    public $user_to_id;
    public $message;
    public $chat;
    

    public function render()
    {
        $user_id = Auth::user()["id"];

            
        return view('livewire.chat-app-card',["user_id"=>$user_id]);
    }
    public function GetUserMessages($id){
        
        $this->user_to_id =$id["id"];
        $this->user_messages = UserChat::where("user_to",$id)->orWhere("user_from",$id)->latest()->take(5)->get()->reverse();
        $this->emit("renderMessage");
      
        
    }
    
 
    public function SendMessageToUser(){
        //return $this->sender_user_id["id"];
        UserChat::create(["user_from"=>Auth::user()["id"],"user_to"=>$this->user_to_id,"content"=>$this->message]);
        //dd($this->user_to_id);
        $user = User::find($this->user_to_id);
        $sender_id = Auth::user()["id"];
        broadcast(new SendMessage($this->message,$user,$sender_id))->toOthers();
        //dd($this->sender_user_id);
        $this->emit("UserMessage",["id"=>$this->user_to_id]);
        $this->message = "";
    }
}
