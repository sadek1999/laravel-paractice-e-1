<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
