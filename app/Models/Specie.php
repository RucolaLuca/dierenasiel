<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    protected $table = 'species';
    protected $fillable = ['name'];

    public function animals() {
        return $this->hasMany(Animal::class, 'species_id');
    }
}
