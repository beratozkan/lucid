<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpDepartments extends Model
{
    use HasFactory;
    protected $fillable = ['boss',"departman_name","depertman_head","total_employe"];
    protected $table = "departments";
}
