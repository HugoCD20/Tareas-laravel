<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task_category extends Model
{
    use HasFactory;
    protected $fillable=[
        'task_id',
        'category_id'
    ];

    public function task(){
        return $this->belongsTo(task::class);
    }
    public function category(){
        return $this->belongsTo(categories::class);
    }
}
