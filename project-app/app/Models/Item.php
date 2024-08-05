<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    // use HasFactory;
    protected $fillable = [
        'customer_id',
        'item_name',
        'category',
        'total',
        'price_unit',
        'date_in',
        'date_out',
        'no_tracking',
        'status',
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
