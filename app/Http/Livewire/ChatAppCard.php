<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserChat;
use App\Models\ChatClients;
use Auth;
class ChatAppCard extends Component
{
    protected $listeners = ["renderMessage"=>"render","UserMessage"=>"GetUserMessages"];
    public $user_messages = [];
    public $sender_user_id;
    public $message;
    public function render()
    {
        
        return view('livewire.chat-app-card');
    }
    public function GetUserMessages($id){
        
        $this->user_messages = UserChat::where("user_to",$id)->orWhere("user_from",$id)->latest()->take(5)->get()->reverse();
        
        
        $this->sender_user_id = $id;
    }
    public function SendMessage(){
        //dd($this->u_id["id"]);
        UserChat::create(["user_from"=>Auth::user()["id"],"user_to"=>$this->sender_user_id["id"],"content"=>$this->message]);
        $this->emit("UserMessage",[$this->sender_user_id]);
    }
}
