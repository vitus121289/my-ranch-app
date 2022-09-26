<?php

use App\Http\Controllers\Admin\DamsController as AdminDamsController;
use Illuminate\Support\Facades\Route;

Route::get('admin/dams', [AdminDamsController::class, 'index']);