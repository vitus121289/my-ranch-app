<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalfWeight extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight'
    ];

    public function calf() {
        return $this->belongsTo(Calf::class);
    }
}
