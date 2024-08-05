<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    // use HasFactory;
    protected $fillable = [
        'item_id',
        'customer_id',
        'type',
        'total',
        'date',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserAdmin::class);
    }
    public function customerList(): BelongsTo
    {
        return $this->belongsTo(CustomerList::class);
    }
}
