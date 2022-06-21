<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
class LeaveRequests extends Component
{
    public $option,$date_to,$date_from;
    public function render()
    {
        $req = $this->getRequests();
        
        return view('livewire.leave-requests',["leaveRequests"=>$req]);
    }
    public function getRequests(){
        $employes_requests = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/leave-requests")->object();
        return $employes_requests;

    }
    public function AddLeaveRequests(){
        $employes_requests = Http::withToken(Cookie::get("access_token"))->post("http://127.0.0.1:8001/api/add-leave-requests",
        [""]
        
        )->object();

        
        

    }
}
