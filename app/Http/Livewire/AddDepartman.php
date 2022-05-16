<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmpDepartments;
use Auth;
class AddDepartman extends Component
{
    public $DepartmanName;
    public $DepartmanHead;
    public $totalEmploye;
    public function render()
    {
        return view('livewire.add-departman');
    }
    public function AddDepartments(){
        EmpDepartments::create(["boss"=>"1","departman_name"=>"test","departman_head"=>"test","total_employe"=> "34"]);

        //EmpDepartments::create(["boss"=>Auth::user()["id"],"departman_name"=>$this->DepartmanName,"departman_head"=>$this->DepartmanHead,"total_employe"=> $this->totalEmploye]);
        $this->emit("renderDepartmans");
    }
}
