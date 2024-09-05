<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'first_name',
        'last_name',
        'email',
        'password',
        'is_system_admin',
        'last_login',
        'account_opening_date',
        'account_status',
        'failed_login_attempts',
        'account_closure_date',
        'account_closure_reason',
        'created_by',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'account_opening_date' => 'datetime',
        'last_login' => 'datetime',
        'account_closure_date' => 'datetime',
    ];

    /**
     * Get the current logged-in organization for the user.
     */
    public function getCurrentLoggedInOrganizationAttribute()
    {
        $organization = Organization::where('admin_user_id', $this->id)->first();
        if ($organization) {
            return $organization;
        }
        return null;
    }
}
