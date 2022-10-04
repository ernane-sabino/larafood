<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj', 'name', 'url', 'email', 'logo', 'active', 'subscription',
        'expire_at', 'subscription_id', 'subscription_active', 'subscription_suspended'
    ];

    /**
     * Get Users -> um para muitos
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * Get Plans -> muitos para muitos
     */
    public function plan() {
        return $this->belongsTo(Tenant::class);
    }
}
