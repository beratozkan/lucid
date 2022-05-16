<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employes;
use Auth;
class EmployeController extends Controller
{
    
   public function PermControl($empId){
       if($empId != Auth::user()["id"]){
           return false;
       }
       return true;
   }
    public function index($page=1){
        $employes = $this->ShowEmploye($page);
        return view("employe-all",["employes"=>$employes]);
    }

    public function AddNewEmploye(Request $req){
        employes::create(["boss"=>Auth::user()["id"],"name"=>$req->e_name,"job"=>$req->e_role,"phoneNumber"=>$req->phone_number,"email"=>$req->email,"gender"=>$req->gender3]);
        return redirect("employe-all");
    }
    public function ShowEmploye($page){
        $employes = employes::where("boss",Auth::user()["id"])->skip(($page-1)*15)->take(15)->get();
        return $employes;
    }
    public function EditEmploye($id,Request $req){
        $emp = $employes::find(1);
        if($this->PermControl($emp->id)){
            $emp->update(["name","email","phoneNumber",""]);
        }

    }
    public function deleteEmploye($id){
        
        $emp = employes::find($id);
        if($emp){
            $emp->delete();
            return redirect("employe-all");
        }
        

    }
}
