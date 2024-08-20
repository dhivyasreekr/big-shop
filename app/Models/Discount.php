<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table ='discounts';

    protected $fillable = [
        'type',
        'start_date',
        'end_date',
        'never_expired'
    ];
}
