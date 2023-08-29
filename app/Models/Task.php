<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'description',
        'routine',
        'activity_id',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
