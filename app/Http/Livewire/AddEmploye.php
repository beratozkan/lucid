<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\employes;

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
        $this->emit("renderEmploye");
    }
}
