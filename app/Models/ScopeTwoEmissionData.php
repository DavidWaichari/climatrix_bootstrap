<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopeTwoEmissionData extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'id',
        'organization_id',
        'organization_branch_id',
        'category_id',
        'user_id',
        'from_date',
        'to_date',
        'units',
        'unit_of_measurement',
        'emissions_per_month',
        'total_ghg',
        'status',
        'extras',
        'created_at',
        'updated_at'
    ];

    // Relationships
    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_branch_id');
    }
    /**
     * Get the organization branch that owns the ScopeTwoEmissionData.
     */
    public function organizationBranch()
    {
        return $this->belongsTo(OrganizationBranch::class, 'organization_branch_id');
    }

    /**
     * Get the category associated with the ScopeTwoEmissionData.
     */
    public function category()
    {
        return $this->belongsTo(ScopeTwoEmissionCategory::class, 'category_id');
    }

    /**
     * Get the user that created the ScopeTwoEmissionData.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
