<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evaluation extends Model
{
    use HasFactory;

    public function task(): BelongsTo
    {
        return $this->belongsTo(task::class);
    }

    public function dangerDescription(): BelongsTo
    {
        return $this->belongsTo(DangerDescription::class);
    }

    public function deficiencyLevel(): BelongsTo
    {
        return $this->belongsTo(DeficiencyLevel::class);
    }

    public function exposureLevel(): BelongsTo
    {
        return $this->belongsTo(ExposureLevel::class);
    }

    public function probabilityLevel(): BelongsTo
    {
        return $this->belongsTo(ProbabilityLevel::class);
    }

    public function consequenceLevel(): BelongsTo
    {
        return $this->belongsTo(ConsequenceLevel::class);
    }

    public function interventionRiskLevel(): BelongsTo
    {
        return $this->belongsTo(InterventionRiskLevel::class);
    }

    public function riskAcceptabilitity(): BelongsTo
    {
        return $this->belongsTo(RiskAcceptability::class);
    }

    public function interventionMeasures(): BelongsToMany
    {
        return $this->belongsToMany(InterventionMeasure::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
