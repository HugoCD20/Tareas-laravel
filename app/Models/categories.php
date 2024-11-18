<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'

    ];

    public function task_category(){
        return $this->hasMany(task_category::class);
    }
}
