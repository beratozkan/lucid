<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\employes;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class EmployeModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $employe = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/employes");
        
        
        $male = $employe["male"];
        $female = $employe["female"];
        $employes = $employe["employes"];
        if($male == 0){
            $male_count = 0;
        }
        else{
            $male_count = 100/(($male +($female ? $female:$female=1))/($male ? $male:$male=1));

        }
        return view('components.employe-modal',["employes"=>$employes,"male"=>$male_count]);
    }
}
