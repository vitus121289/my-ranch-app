<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sire extends Model
{
    use HasFactory;

    protected $fillable = [
        'number'
    ];

    public function dams() {
        return $this->hasMany(Dam::class);
    }

    public function calves() {
        return $this->hasManyThrough(Calf::class, Dam::class);
    }
}
