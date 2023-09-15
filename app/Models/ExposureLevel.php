<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ExposureLevel extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name',
        'value',
        'meaning',
        'color'
    ];

    public function deficiencyLevels(): BelongsToMany
    {
        return $this->belongsToMany(DeficiencyLevel::class);
    }
}
