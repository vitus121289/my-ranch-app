<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dam;
use Illuminate\Http\Request;

class DamController extends Controller
{
    public function index() {
        return view('admin.dams.index', [
            'dams' => Dam::all()
        ]);
    }
}
