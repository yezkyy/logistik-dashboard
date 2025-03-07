<aside class="w-60 bg-white border-r border-gray-100 min-h-screen p-5 hidden md:flex flex-col flex-shrink-0 shadow-sm">

    <!-- Navigasi -->
    <nav class="flex-1">
        <ul class="space-y-3">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 p-3 rounded-lg text-gray-700 hover:bg-[#5DB996] hover:text-white transition">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-white" viewBox="0 0 24 24"><path d="M3 10l9-7 9 7v11a2 2 0 0 1-2 2h-4v-6h-6v6H5a2 2 0 0 1-2-2V10z"/></svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('items.index') }}" class="flex items-center gap-3 p-3 rounded-lg text-gray-700 hover:bg-[#5DB996] hover:text-white transition">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-white" viewBox="0 0 24 24"><path d="M3 3h18v2H3zm0 8h18v2H3zm0 8h18v2H3z"/></svg>
                    <span>Data Barang</span>
                </a>
            </li>
            <li>
                <a href="{{ route('qr-scanner') }}" class="flex items-center gap-3 p-3 rounded-lg text-gray-700 hover:bg-[#5DB996] hover:text-white transition">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-white" viewBox="0 0 24 24"><path d="M4 3h4v2H4zm6 0h4v2h-4zm6 0h4v2h-4zM4 7h4v2H4zm10 0h6v2h-6zm-4 4h4v2h-4zm-6 0h4v2H4zm10 0h6v2h-6zM4 15h4v2H4zm6 0h4v2h-4zm6 0h4v2h-4zm-6 4h4v2h-4z"/></svg>
                    <span>QR Scanner</span>
                </a>
            </li>
            <li>
                <a href="{{ route('settings') }}" class="flex items-center gap-3 p-3 rounded-lg text-gray-700 hover:bg-[#5DB996] hover:text-white transition">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-white" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10.02 10.02 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8.01 8.01 0 0 1-8 8z"/></svg>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout -->
    <div class="mt-6">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left flex items-center gap-3 p-3 rounded-lg text-white bg-red-500 hover:bg-red-600 transition">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M16 13h-6v-2h6V7l5 5-5 5v-4z"/></svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
</aside>