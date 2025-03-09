<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Barang
        </h2>
    </x-slot>

    <div class="py-10 px-6 max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="block mb-2">Nama Barang</label>
            <input type="text" name="name" value="{{ $item->name }}" class="w-full p-2 border rounded-md">

            <label class="block mt-4 mb-2">Deskripsi</label>
            <textarea name="description" class="w-full p-2 border rounded-md">{{ $item->description }}</textarea>

            <label class="block mt-4 mb-2">Jumlah</label>
            <input type="number" name="quantity" value="{{ $item->quantity }}" class="w-full p-2 border rounded-md">

            <label class="block mt-4 mb-2">Status</label>
            <select name="status" class="w-full p-2 border rounded-md">
                <option value="tersedia" {{ $item->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="habis" {{ $item->status == 'habis' ? 'selected' : '' }}>Habis</option>
                <option value="dalam_pengiriman" {{ $item->status == 'dalam_pengiriman' ? 'selected' : '' }}>Dalam Pengiriman</option>
            </select>

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
        </form>
    </div>
</x-app-layout>
