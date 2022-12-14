<?php

namespace App\Models\Admin;

use App\Models\Admin\CalfWeight as Weight;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calf extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'gender',
        'birthdate'
    ];

    public function dam() {
        return $this->belongsTo(Dam::class);
    }

    public function weights() {
        return $this->hasMany(Weight::class);
    }
}
