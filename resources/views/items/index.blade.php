<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Barang
        </h2>
    </x-slot>

    <div class="py-10 px-6 max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">List Barang</h3>
            <a href="{{ route('items.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Tambah Barang</a>
        </div>

        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">Deskripsi</th>
                    <th class="py-3 px-4 text-center">Jumlah</th>
                    <th class="py-3 px-4 text-center">Status</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr class="border-t">
                    <td class="py-3 px-4">{{ $item->name }}</td>
                    <td class="py-3 px-4">{{ $item->description }}</td>
                    <td class="py-3 px-4 text-center">{{ $item->quantity }}</td>
                    <td class="py-3 px-4 text-center">
                        <span class="px-2 py-1 rounded-md text-white {{ $item->status == 'tersedia' ? 'bg-green-500' : ($item->status == 'habis' ? 'bg-red-500' : 'bg-yellow-500') }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                    <td class="py-3 px-4 text-center flex justify-center gap-2">
                        <a href="{{ route('items.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600">Edit</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus barang ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>