<?php

namespace App\Http\Livewire;
use App\Models\ChatClients;
use App\Models\UserInformation;
use Livewire\Component;
use Auth;
class ChatClientController extends Component
{   
    public $userinfo;
   
    public function render()
    {
        
        return view('livewire.chat-client-controller',["clients"=>$this->GetChatLists()]);
    }
    public function showMessages($id){
        
        $this->emit("UserMessage",["id"=>$id]);
    }
    public function GetUserInfo($id){
        $this->userinfo =  UserInformation::where("id",$id)->first();
    }
    public function GetChatLists(){
        $chats = ChatClients::where("user_from",Auth::user()["id"])->get();
          //  $chats = ChatClients::all();
        //$this->emit("UserMessage",["id"=>$chats[0]->user_to]);
        return $chats;
        
    }
}
