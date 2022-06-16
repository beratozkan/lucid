<?php

namespace App\Http\Livewire;
use App\Models\employes;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\UserInformation;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
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
        $emp = Http::withToken(Cookie::get("access_token"))->delete("http://127.0.0.1:8001/api/delete-employe",["id"=>$id]);
        
        if($emp->status()!=200){
                
            $emp->delete();
            $user = UserInformation::where("userId",Auth::user()["id"])->first();
            if($user->employe_count>0){
                $user->employe_count -=1;
            } 
            
            $user->save();
            
        }
        

    }
    public function ShowEmploye($page){
        
        $employes = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/employes",
        ["page"=>$page]
        )->object();
            
            return $employes;
    }
   

}
