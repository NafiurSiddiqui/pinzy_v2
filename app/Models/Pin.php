<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pin extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        'lng',
        'lat',
        'body',
        'disregard'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
