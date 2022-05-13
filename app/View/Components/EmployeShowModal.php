<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\employes;
use Auth;
class EmployeShowModal extends Component
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
    public function ShowEmploye($page){
        $employes = employes::where("boss",Auth::user()["id"])->skip(($page-1)*15)->take(15)->get();
        return $employes;
    }
    public function render()
    {   
        $employes = $this->ShowEmploye($page=1);
        return view('components.employe-show-modal',["employes"=>$employes]);
    }
}
