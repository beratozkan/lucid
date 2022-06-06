<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmpDepartments;
use App\Models\employes;

use Auth;
class AddDepartman extends Component
{
    public $departman_name;
    public $departman_head;
    public $total_employe;
    public $error_message;
    //protected $listeners  = ["showModal"=>]
    public function render()
    {
        return view('livewire.add-departman');
    }
    public function AddDepartment(){
        $validatedData = $this->validate([
                       'departman_head' => 'required',
                        'departman_name' => 'required',
                    ]);
            
        if(employes::where(["boss"=>Auth::user()["id"],"name"=>$this->departman_head])->exists()){
            
            EmpDepartments::create(["boss"=>Auth::user()["id"],"departman_name"=>$this->departman_name,"depertman_head"=>$this->departman_head,"total_employe"=> $this->total_employe]);
            $this->emit("renderDepartmans");
        };
        


        //EmpDepartments::create(["boss"=>Auth::user()["id"],"departman_name"=>$this->DepartmanName,"departman_head"=>$this->DepartmanHead,"total_employe"=> $this->totalEmploye]);
       
    }
}
