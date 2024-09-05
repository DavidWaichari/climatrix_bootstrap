<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScopeOneEmissionData extends Model
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

    protected $appends =[
        'available_in_months'
    ];
    // Relationships

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_branch_id');
    }

    /**
     * Get the organization branch that owns the ScopeOneEmissionData.
     */
    public function organizationBranch()
    {
        return $this->belongsTo(OrganizationBranch::class, 'organization_branch_id');
    }

    /**
     * Get the category associated with the ScopeOneEmissionData.
     */
    public function category()
    {
        return $this->belongsTo(ScopeOneEmissionCategory::class, 'category_id');
    }

    /**
     * Get the user that created the ScopeOneEmissionData.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getAvailableInMonthsAttribute()
    {
        $start = Carbon::parse($this->from_date)->startOfMonth();
        $end = Carbon::parse($this->to_date)->endOfMonth();
        $months = [];

        while ($start->lessThanOrEqualTo($end)) {
            $months[] = $start->format('Y-m');
            $start->addMonth();
        }

        return $months;
    }
}
