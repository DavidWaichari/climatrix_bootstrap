<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'admin_user_id',
        'created_by',
        'last_login',
        'status',
        'extras',
    ];

    /**
     * Get the admin user that owns the organization.
     */
    public function adminUser()
    {
        return $this->belongsTo(User::class, 'admin_user_id');
    }

    /**
     * Get the user that created the organization.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

   
}
