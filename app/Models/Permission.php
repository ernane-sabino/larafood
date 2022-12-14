<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * Get Profiles -> relacionamento many to many
     */
    public function profiles() {
        return $this->belongsToMany(Profile::class);
    }
}
