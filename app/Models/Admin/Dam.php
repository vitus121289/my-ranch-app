<?php

namespace App\Models\Admin;

use App\Models\Admin\Calf;
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
}
