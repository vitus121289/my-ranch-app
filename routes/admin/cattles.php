<?php

use App\Http\Controllers\Admin\CattlesController as AdminCattlesController;
use Illuminate\Support\Facades\Route;

Route::get('admin/cattles', [AdminCattlesController::class, 'index']);