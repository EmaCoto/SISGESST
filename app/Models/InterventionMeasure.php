<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InterventionMeasure extends Model
{
    use HasFactory;

    public function evaluations(): BelongsToMany
    {
        return $this->belongsToMany(Evaluation::class);
    }
}
