<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetailsModel extends Model
{
    use HasFactory;
    protected $table = "user_details_models";
    protected $fillable =[
        'name',
        'address',
        'phone',
        'company_name'
    ];
}
