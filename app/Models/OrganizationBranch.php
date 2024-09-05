<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationBranch extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'id',
        'organization_id',
        'name',
        'city_id',
        'size',
        'revenue',
        'total_employees',
        'status',
        'extras',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the organization that owns the branch.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Get the city associated with the branch.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
