<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'application_fee',
        'living_expenses',
        'local_tuition',
        'int_tuition',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'application_fee' => 'decimal:2',
        'living_expenses' => 'decimal:2',
        'local_tuition' => 'decimal:2',
        'int_tuition' => 'decimal:2',
    ];
}
