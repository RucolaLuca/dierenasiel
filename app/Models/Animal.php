<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';
    protected $fillable = [
        'name',
        'species_id',
        'race',
        'age',
        'gender',
        'medical_history',
        'feedingschedule_id'
    ];
    public function specie() {
        return $this->belongsTo(Specie::class);
    }
    public function feedingschedule() {
        return $this->belongsTo(FeedingSchedule::class, 'feedingschedule_id');
    }
}
