<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    protected $table = 'planeten';

    public function solar_systems()
    {
        return $this->belongsTo(Solar_systems::class, 'solar_system_id');
    }
}
