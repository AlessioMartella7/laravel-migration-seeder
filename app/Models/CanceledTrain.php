<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanceledTrain extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'from',
        'to',
        'train_code',
        'departure',
        'arrival',
        'carriage_number'
    ];
}
