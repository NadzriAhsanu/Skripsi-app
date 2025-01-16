<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RekamMedis extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'diagnosa',
        'tekanan_darah',
        'nafas',
        'nadi',
        'suhu',
        'tinggi_badan',
        'berat_badan',
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    use SoftDeletes;
}
