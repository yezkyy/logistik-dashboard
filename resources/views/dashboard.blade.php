<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-black leading-tight">
            {{ __('Dashboard Logistik') }}
        </h2>
    </x-slot>

    <div class="py-12 px-8 bg-lightgreen">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- QR Scanner Card -->
            <div class="bg-white p-8 shadow-xl rounded-lg border-l-4 border-secondary">
                <h2 class="text-2xl font-semibold text-secondary mb-4">QR Scanner</h2>
                <p class="text-gray-700 mb-4">Scan QR untuk data logistik yang lebih cepat dan akurat.</p>
                <x-qr-box />
            </div>

            <!-- Informasi Barang Card -->
            <div class="bg-white p-8 shadow-xl rounded-lg border-l-4 border-accent">
                <h2 class="text-2xl font-semibold text-primary mb-4">Informasi Barang</h2>
                <p class="text-gray-700 mb-4">Daftar barang yang tersedia di sistem logistik.</p>

                <a href="{{ route('items.create') }}" class="bg-primary text-white px-6 py-3 rounded-md hover:bg-[#0A6A3E] transition duration-300">Tambah Barang</a>

                <div class="overflow-x-auto mt-6">
                    <table class="min-w-full table-auto text-left">
                        <thead>
                            <tr class="bg-accent text-primary">
                                <th class="p-4">Nama Barang</th>
                                <th class="p-4">Status</th>
                                <th class="p-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($items->count() > 0)
                                @foreach ($items as $item)
                                    <tr class="border-t hover:bg-lightgreen">
                                        <td class="p-4">{{ $item->name }}</td>
                                        <td class="p-4 {{ $item->status == 'tersedia' ? 'text-green-500' : ($item->status == 'habis' ? 'text-red-500' : 'text-yellow-500') }}">
                                            {{ ucfirst($item->status) }}
                                        </td>
                                        <td class="p-4 flex space-x-4">
                                            <a href="{{ route('items.edit', $item) }}" class="text-primary hover:underline">Edit</a>
                                            <form action="{{ route('items.destroy', $item) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="p-4 text-center text-gray-500">Tidak ada data barang.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>