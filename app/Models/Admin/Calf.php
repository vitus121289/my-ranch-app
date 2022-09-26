<?php

namespace App\Models;

use App\Http\Livewire\Admin\Dam;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calf extends Model
{
    use HasFactory;

    protected $fillable = [
        'number' => 'required|min:4|max:255',
        'gender' => 'required|min:1|max:1|alpha',
        'birthdate' => 'required|date'
    ];

    public function dam() {
        $this->belongsTo(Dam::class);
    }
}
