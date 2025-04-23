<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'reminder_time', 'type', 'user_id', 'doctor_id'];

    /**
     * Relasi ke User (Pasien)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi ke User (Dokter)
     */
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
