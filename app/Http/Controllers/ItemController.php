<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // Tampilkan halaman dashboard dengan daftar barang
    public function index()
    {
        $items = Item::all();
        return view('dashboard', compact('items'));
    }

    // Tampilkan form tambah barang
    public function create()
    {
        return view('items.create');
    }

    // Simpan data barang baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'status' => 'required|in:tersedia,habis,dalam_pengiriman',
            'qr_code' => 'required|unique:items,qr_code',
        ]);

        Item::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Barang berhasil ditambahkan');
    }

    // Tampilkan detail barang
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    // Tampilkan form edit barang
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Update data barang
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'status' => 'required|in:tersedia,habis,dalam_pengiriman',
        ]);

        $item->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Barang berhasil diperbarui');
    }

    // Hapus barang
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('dashboard')->with('success', 'Barang berhasil dihapus');
    }
}