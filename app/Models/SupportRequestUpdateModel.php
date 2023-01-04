<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportRequestUpdateModel extends Model
{
    use HasFactory;
    protected $table = "support_request_update_models";
    protected $fillable =[
        'comment',
        'parent_id'
    ];
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function replies()
    // {
    //     return $this->hasMany(SupportRequestUpdateModel::class, 'parent_id');
    // }
   
}
