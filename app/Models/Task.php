<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'routine',
        'activity_id',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    public function evaluation(): HasOne
    {
        return $this->hasOne(Evaluation::class);
    }
}
