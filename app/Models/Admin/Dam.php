<?php

namespace App\Models\Admin;

use App\Models\Calf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dam extends Model
{
    use HasFactory;

    protected $fillable = [
        'number' => 'required|min:4|max:255'
    ];

    public function calfs() {
        return $this->hasMany(Calf::class);
    }
}
