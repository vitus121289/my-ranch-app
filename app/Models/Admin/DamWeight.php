<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamWeight extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight'
    ];

    public function dam() {
        return $this->belongsTo(Dam::class);
    }
}
