<aside class="flex-shrink-0 w-64 flex flex-col border-r border-gray-700 bg-gray-800/50">
    <div class="h-16 flex items-center justify-center border-b border-gray-700">
        <a href="{{ route('dashboard') }}" class="text-xl font-bold text-teal-400">
            KostManager
        </a>
    </div>
    <nav class="flex-1 flex flex-col p-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition-colors {{ request()->routeIs('dashboard') ? 'bg-teal-500/30 text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            Dashboard
        </a>
        <a href="{{ route('penyewa.index') }}" class="flex items-center px-4 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition-colors {{ request()->routeIs('penyewa.*') ? 'bg-teal-500/30 text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Penyewa
        </a>
        <a href="{{ route('kamar.index') }}" class="flex items-center px-4 py-2 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition-colors {{ request()->routeIs('kamar.*') ? 'bg-teal-500/30 text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            Kamar
        </a>
    </nav>
</aside> 