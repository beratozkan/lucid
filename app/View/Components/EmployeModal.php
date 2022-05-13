<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\employes;
use auth;
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
        $employe = employes::where("boss",Auth::user()["id"])->get();
        $male = $employe->where("gender","M")->count();
        $female = $employe->where("gender","F")->count(); 
        $male_count = 100/(($male +$female)/$male);
        return view('components.employe-modal',["employes"=>$employe,"male"=>$male_count]);
    }
}