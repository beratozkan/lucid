<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\employes;
use App\Models\UserInformation;

use Auth;

class AddEmploye extends Component
{
    public $name;public $email;public $gender;public $phoneNumber;public $role;
   
    public function render()
    {
        return view('livewire.add-employe');
    }
    
    public function AddEmploye(){
        employes::create(["phoneNumber"=>$this->phoneNumber,"boss"=> Auth::user()["id"],"name"=>$this->name,"email"=>$this->email,"gender"=>$this->gender,"job"=>$this->role]);
        $user = UserInformation::where("userId",Auth::user()["id"])->first();
        //dd($user);
        $user->employe_count +=1;
        $user->save();
        $this->emit("renderEmploye");
    }
    
}
