<?php

namespace App\Http\Livewire;
use App\Models\employes;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\UserInformation;

use App\Http\Requests;
use Illuminate\Http\Request;
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
        $emp = Http::withToken(Cookie::get("access_token"))->put("http://127.0.0.1:8001/api/delete-employe",["id"=>$id]);
        
        if($emp->status() != 200){
            

         }
        
         $this->emit("renderEmploye");
         $this->dispatchBrowserEvent('alert', 
            ['type' => 'success',  'message' => 'kullanıcı başarıyle silindi']);

        

    }
    public function ShowEmploye($page){
        
        $employes = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/employes",
        ["page"=>$page]
        )->object();
            
            return $employes;
    }
   

}
