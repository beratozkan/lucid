<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employes extends Model
{
    protected $table = 'employes';
    protected $fillable = ['boss',"name","email","phoneNumber","job","gender"];
    use HasFactory;
}
