<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DeficiencyLevel extends Model
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
    public function evaluation():BelongsTo
    {
        return $this->belongsTo(Evaluation::class);
    }

    public function exposureLevels(): BelongsToMany
    {
        return $this->belongsToMany(ExposureLevel::class);
    }


}
