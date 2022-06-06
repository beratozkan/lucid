<?php

namespace App\Http\Livewire;
use App\Models\EmpDepartments;
use App\Models\emoloyes;

use Livewire\WithPagination;

use Livewire\Component;
use Auth;
class EmpDepartman extends Component
{  
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
   
    protected $listeners = ["renderDepartmans"=>"render"];
    public function render()
    {
        $departmans = $this->getDepartmans();
        return view('livewire.emp-departman',["departmans"=>$departmans]);
    }   
   public function delete($id){
    $deleted_item = EmpDepartments::find($id)->delete();
    
    if($deleted_item){
        return "başarılı";
    }
    
    $this-emit("renderDepartmans");
   }
    public function getDepartmans(){
        return EmpDepartments::where("boss",Auth::user()["id"])->paginate(5);
    }
    
}
