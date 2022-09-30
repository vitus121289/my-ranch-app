<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SireWeight extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight'
    ];
    
    public function sire() {
        return $this->belongsTo(Sire::class);
    }
}
