<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedingSchedule extends Model
{
    protected $fillable = ['name', 'description', 'nutrients'];

    public function animals()
    {
        return $this->hasMany(Animal::class, 'feedingschedule_id');
    }
}
