<?php

namespace App\Models\Admin;

use App\Models\Admin\Dam;
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
        $this->belongsTo(Dam::class);
    }
}
