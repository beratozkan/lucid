<?php

namespace App\Http\Livewire;
use App\Models\EmpDepartments;
use Livewire\WithPagination;

use Livewire\Component;
use Auth;
class EmpDepartman extends Component
{  
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $DepartmanName;
    public $DepartmanHead;
    public $totalEmploye;
    protected $listeners = ["renderDepartmans"=>"render"];
    public function render()
    {
        $departmans = $this->getDepartmans();
        return view('livewire.emp-departman',["departmans"=>$departmans]);
    }
    public function AddDepartments(){

        EmpDepartmets::create(["boss"=>Auth::user()["id"],"departman_name"=>$this->DepartmanName,"departman_head"=>$this->DepartmanHead,"total_employe"=> $this->totalEmploye]);

    }
    public function getDepartmans(){
        return EmpDepartments::where("boss",Auth::user()["id"])->paginate(5);
    }
    
}
