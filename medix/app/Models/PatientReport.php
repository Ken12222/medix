<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientReport extends Model
{
    use HasFactory;

    protected $fillable = ["patient_id", "doctor_id","symptoms", "doc_report"];

    public function Doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function Patient(){
        return $this->belongsTo(Patient::class);
    }
}
