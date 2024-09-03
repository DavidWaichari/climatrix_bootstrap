<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopeFiveEmissionData extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
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
    ];

    // Relationships

    /**
     * Get the organization branch that owns the ScopeFiveEmissionData.
     */
    public function organizationBranch()
    {
        return $this->belongsTo(OrganizationBranch::class, 'organization_branch_id');
    }

    /**
     * Get the category associated with the ScopeFiveEmissionData.
     */
    public function category()
    {
        return $this->belongsTo(ScopeFiveEmissionCategory::class, 'category_id');
    }

    /**
     * Get the user that created the ScopeFiveEmissionData.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
