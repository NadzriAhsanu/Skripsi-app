<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    use HasFactory;
    protected $table = 'bidans';
    protected $fillable = [
        'bidan_name',
        'bidan_email',
        'bidan_phone',
        'bidan_password',
        'role',
        'photo',
        'address',
        'sip',
        'id_ihs',
        'nik',
        'birth_date'
    ];
    public function bidan_schedules()
    {
        return $this->hasMany(BidanSchedule::class);
    }
}
