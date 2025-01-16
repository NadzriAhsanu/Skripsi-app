<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidanSchedule extends Model
{
    use HasFactory;
    protected $fillable =[
        'bidan_id',
        'day',
        'time',
        'status',
        'note',
    ];


    public function bidan()
    {
        return $this->belongsTo(Bidan::class);
    }
}
