<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'medical_record_number',
        'name',
        'birth_date',
        'gender',
        'address',
        'phone',
        'emergency_contact',
        'blood_type',
        'allergies',
        'is_active',
    ];
}
