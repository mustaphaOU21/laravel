<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solar_systems extends Model
{
    use HasFactory;
    protected $table = 'solar_systems';

    public function planets()
    {
        return $this->hasMany(Planet::class, 'solar_system_id');
    }
}
