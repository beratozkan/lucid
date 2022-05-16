<?php

namespace App\Http\Livewire;
use App\Models\employes;
use Livewire\WithPagination;
use Livewire\Component;
use Auth;

class ShowEmployes extends Component
{
    
    protected  $listeners = ["renderEmploye"=>"render"];
    
    use WithPagination;
      protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $employes = $this->ShowEmploye($page=1);

        return view('livewire.show-employes',["employes"=>$employes]);
    }
    public function deleteEmploye($id){
        
        $emp = employes::find($id);
        if($emp){
            
            $emp->delete();  
            
            
        }
        

    }
    public function ShowEmploye($page){
        $employes = employes::where("boss",Auth::user()["id"])->paginate(5);
        return $employes;
    }
   

}
