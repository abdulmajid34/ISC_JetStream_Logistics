<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'hire_date'
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(UserAdmin::class);
    }
}
