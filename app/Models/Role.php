<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Determine user role (admin/normal)
class Role extends Model
{

    public function users()
    {
        // Relationship to user
        return $this->belongsToMany(User::class);
    }

    use HasFactory;
}
