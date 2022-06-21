<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\employes;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Auth;

class AddEmploye extends Component
{
    public $name;public $email;public $gender;public $phoneNumber;public $role;
   
    public function render()
    {
        return view('livewire.add-employe');
    }
    
    public function AddEmploye(){
        $user= Http::withToken(Cookie::get("access_token"))->post("http://127.0.0.1:8001/api/add-employe",
    ["phoneNumber"=>$this->phoneNumber,"name"=>$this->name,"email"=>$this->email,"gender"=>$this->gender,"role"=>$this->role]);
       
        if($user->status() != 404){
            $this->emit("renderEmploye");
            $this->dispatchBrowserEvent('alert', 
            ['type' => 'success',  'message' => 'kullanıcı başarıyle eklendi']);
}
        }
        
        
    }
    

