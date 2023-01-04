<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportCategoryModel extends Model
{
    use HasFactory;
    protected $table = "support_category_models";
    protected $fillable =[
        'name',
        'description'
    ];
}
