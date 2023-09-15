<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'danger',
        'effects',
        'source',
        'means',
        'individual',
        'linked',
        'contractor',
        'temporary',
        'time',
        'elimination',
        'substitution',
        'engineering_controls',
        'administrative_controls',
        'personal_protection',
        'compliance_legal',
    ];
    public function task():BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }
    public function deficiency_levels():HasMany
    {
        return $this->hasMany(DeficiencyLevel::class);
    }
}
