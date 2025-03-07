<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings'); // Pastikan ada file resources/views/settings.blade.php
    }
}
