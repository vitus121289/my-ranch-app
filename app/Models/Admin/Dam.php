<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dam extends Model
{
    use HasFactory;

    protected $fillable = [
        'number'
    ];

    public function calves() {
        return $this->hasMany(Calf::class);
    }

    public function sire() {
        return $this->belongsTo(Sire::class);
    }
}
