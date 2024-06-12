<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feed extends Model
{
    protected $fillable = [
        'comentario',
        'user_id',
        'image',
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
