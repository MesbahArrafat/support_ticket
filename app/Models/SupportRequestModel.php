<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupportRequestModel extends Model
{
    use HasFactory;
    protected $table = "support_request_models";
    protected $fillable =[
        'customer_id',
        'name',
        'category_id',
        'description'
    ];
    public function user(){
        return $this->hasOne(User::class, 'id', 'customer_id');
    }
    public function employee(){
        return $this->hasOne(User::class, 'id', 'employee_id');
    }
    public function category(){
        return $this->hasOne(SupportCategoryModel::class, 'id', 'category_id');
    }
    public function project(){
        return $this->hasOne(ProjectsModel::class, 'id', 'project_id');
    }

    // this section for comment
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id')->whereNull('parent_id');
    }
   
}
