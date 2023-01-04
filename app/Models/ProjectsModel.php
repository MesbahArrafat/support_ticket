<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsModel extends Model
{
    use HasFactory;
    protected $table = "projects_models";
    protected $fillable =[
        'name',
        'user_id',
        'description',
        'status'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
