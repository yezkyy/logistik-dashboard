<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Barang
        </h2>
    </x-slot>

    <div class="py-10 px-6 max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <label class="block mb-2">Nama Barang</label>
            <input type="text" name="name" class="w-full p-2 border rounded-md">

            <label class="block mt-4 mb-2">Deskripsi</label>
            <textarea name="description" class="w-full p-2 border rounded-md"></textarea>

            <label class="block mt-4 mb-2">Jumlah</label>
            <input type="number" name="quantity" class="w-full p-2 border rounded-md">

            <label class="block mt-4 mb-2">Status</label>
            <select name="status" class="w-full p-2 border rounded-md">
                <option value="tersedia">Tersedia</option>
                <option value="habis">Habis</option>
                <option value="dalam_pengiriman">Dalam Pengiriman</option>
            </select>

            <label class="block mt-4 mb-2">QR Code</label>
            <input type="text" name="qr_code" class="w-full p-2 border rounded-md">

            <button type="submit" class="mt-4 bg-[#118B50] text-white px-4 py-2 rounded-md">Simpan</button>
        </form>
    </div>
</x-app-layout>
