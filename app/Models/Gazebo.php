<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gazebo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category_gazebos()
    {
        return $this->belongsTo(CategoryGazebo::class);
        
    }
}
