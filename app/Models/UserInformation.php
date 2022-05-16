<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;
    protected $table = 'user_information';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'userId',
        'email',
        'surname',
    ];
}
