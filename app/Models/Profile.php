<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * Get Permissions -> relacionamento many to many
     */
    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }
}
