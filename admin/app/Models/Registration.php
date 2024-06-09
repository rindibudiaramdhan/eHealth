<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'registration_date',
        'poli_id',
        'is_cancelled',
        'paid_at',
    ];

    /**
     * Get the status attribute.
     *
     * @return string
     */
    public function getStatusAttribute()
    {
        $result = $this->is_cancelled == 0 ? 'Terdaftar' : 'Batal';
        if ($this->paid_at) {
            $result = 'Lunas';
        }
        return $result;
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function poli()
    {
        return $this->belongsTo(Polis::class);
    }
}
