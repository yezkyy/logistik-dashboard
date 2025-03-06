<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::all(); // Ambil semua data dari tabel items
        return view('dashboard', compact('items')); // Kirim data ke view
    }
}