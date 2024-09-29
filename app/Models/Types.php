<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $fillable = [
        'name',
        'type',
        'position_id'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
