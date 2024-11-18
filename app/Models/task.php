<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'status',
        'user_id',
        'due_date'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function task_category(){
        return $this->hasMany(task_category::class);
    }
}
