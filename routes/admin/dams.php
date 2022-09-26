<?php

use App\Http\Controllers\Admin\DamController as AdminDamController;
use Illuminate\Support\Facades\Route;

Route::get('admin/dams', [AdminDamController::class, 'index']);