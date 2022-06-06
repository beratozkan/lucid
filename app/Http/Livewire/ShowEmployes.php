<?php

namespace App\Http\Livewire;
use App\Models\employes;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\UserInformation;
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
            $user = UserInformation::where("userId",Auth::user()["id"])->first();
            if($user->employe_count>0){
                $user->employe_count -=1;
            } 
            
            $user->save();
            
        }
        

    }
    public function ShowEmploye($page){
        $employes = employes::where("boss",Auth::user()["id"])->paginate(5);
        return $employes;
    }
   

}
