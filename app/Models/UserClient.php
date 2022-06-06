<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClient extends Model
{
    use HasFactory;
    protected $table = "user_clients";
    protected $fillable = ['firstName',"lastName","email","username","password","clientId","phoneNumber","projects","adress",
    "tasks","chat","estimates"

];
}
