<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Follower extends Model
{
    use HasFactory;
    protected $guarded = []; //add all properties to fillable
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}