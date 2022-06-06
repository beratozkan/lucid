<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\UserClient;
class AddClient extends Component
{
    public $username,$phone_number,$surname,$name,$clientId,$adress,$email,$password,$password_confirm;
    public $estimates = [],$message;
    public function render()
    {
        return view('livewire.add-client');
    }
    public function AddClient(){
        
        $this->message = $this->estimates;
    }
}
