<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'uploads/71raFncD7390HsA2O7utlOGy5EZ85tsVomqoA6Vx.jpg';
        // return '/storage/' . $imagePath;
        return $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(\App\Models\User::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
