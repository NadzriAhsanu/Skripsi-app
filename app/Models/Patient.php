<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable =[
        'patient_id',
        'patient_name',
        'patient_nik',
        'patient_kk',
        'patient_phone',
        'patient_email',
        'birth_date',
        'address_line',
    ];
    public function rekam_medis()
    {
        return $this->hasMany(RekamMedis::class, 'patient_id');
    }
}
