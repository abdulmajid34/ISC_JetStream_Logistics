<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerList extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
