<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kost Manager - Kelola Properti Secara Cerdas</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-gray-900 text-gray-300">
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="bg-gray-900/70 backdrop-blur-md shadow-lg fixed w-full z-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-3">
                    <div class="flex items-center">
                        <!-- New, More Interesting Logo -->
                        <svg class="h-8 w-8" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="logoGradientHeader" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#2DD4BF"/>
                                    <stop offset="100%" stop-color="#38BDF8"/>
                                </linearGradient>
                            </defs>
                            <path d="M20 90V10H40V40L70 10L80 20L50 50L80 80L70 90L40 60V90H20Z" fill="url(#logoGradientHeader)"/>
                        </svg>
                        <span class="ml-3 text-xl font-bold text-white">Kost Manager</span>
                    </div>
                    <div class="hidden md:flex items-center space-x-2">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-white transition-colors">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-gray-300 hover:text-white transition-colors">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-2 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-gray-900 bg-teal-400 hover:bg-teal-500 transition-colors">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow">
            <!-- Hero Section -->
            <section class="relative pt-32 pb-16 lg:pt-48 lg:pb-24 bg-gray-900">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-black opacity-50"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center relative z-10">
                    <div class="text-center lg:text-left">
                        <p class="text-base font-semibold text-teal-400 tracking-wider uppercase">Solusi All-in-One</p>
                        <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                            <span class="block">Manajemen Kost</span>
                            <span class="block text-teal-400">Jadi Lebih Cerdas</span>
                        </h1>
                        <p class="mt-6 max-w-2xl mx-auto lg:mx-0 text-lg text-gray-400">
                            Otomatiskan pengelolaan data penyewa, kamar, dan keuangan. Nikmati kemudahan dan efisiensi dalam genggaman Anda.
                        </p>
                        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent rounded-md shadow-lg text-base font-bold text-gray-900 bg-teal-400 hover:bg-teal-500 transform hover:-translate-y-1 transition-all">
                                Coba Gratis
                            </a>
                            <a href="#fitur" class="inline-flex items-center justify-center px-8 py-3 border border-gray-600 rounded-md shadow-sm text-base font-medium text-white bg-gray-800 hover:bg-gray-700 transform hover:-translate-y-1 transition-all">
                                Lihat Fitur
                            </a>
                        </div>
                    </div>
                    <div class="hidden lg:block relative">
                        <!-- New, More Abstract Hero Visual -->
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-teal-500/30 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-sky-500/30 rounded-full blur-3xl"></div>
                        <div class="p-8 bg-gray-800/50 backdrop-blur-md rounded-2xl border border-gray-700 shadow-2xl">
                           <svg class="w-full h-auto" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="goldSurface" x1="50%" y1="0%" x2="50%" y2="100%">
                                        <stop offset="0%" stop-color="#fef9c3" /><stop offset="50%" stop-color="#fde047" /><stop offset="100%" stop-color="#eab308" />
                                    </linearGradient>
                                    <linearGradient id="goldSide" x1="50%" y1="0%" x2="50%" y2="100%">
                                        <stop offset="0%" stop-color="#ca8a04" /><stop offset="100%" stop-color="#854d0e" />
                                    </linearGradient>
                                    <linearGradient id="managementGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#5eead4" /><stop offset="100%" stop-color="#67e8f9" />
                                    </linearGradient>
                                    <filter id="finalGlow" x="-50%" y="-50%" width="200%" height="200%">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="4" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 0.7 0" result="glow" />
                                        <feComposite in="SourceGraphic" in2="glow" operator="over" />
                                    </g>
                                </defs>

                                <!-- House Outline -->
                                <path d="M100 25 L 175 80 V 175 H 25 V 80 Z" stroke="#4A5568" stroke-width="2" fill="none" opacity="0.7"/>

                                <!-- Main Icon Group -->
                                <g>
                                    <!-- Stacking Coins with Drop Animation -->
                                    <g id="coin-stack" filter="url(#finalGlow)">
                                        <!-- Coin 3 (Bottom) -->
                                        <g transform="translate(0, -60)" opacity="0">
                                            <animateTransform attributeName="transform" type="translate" from="0 -60" to="0 0" dur="0.6s" begin="0.5s" fill="freeze" />
                                            <animate attributeName="opacity" from="0" to="1" dur="0.6s" begin="0.5s" fill="freeze" />
                                            <ellipse cx="100" cy="130" rx="30" ry="12" fill="url(#goldSide)" />
                                            <ellipse cx="100" cy="125" rx="30" ry="12" fill="url(#goldSurface)" />
                                        </g>
                                        <!-- Coin 2 (Middle) -->
                                        <g transform="translate(0, -60)" opacity="0">
                                            <animateTransform attributeName="transform" type="translate" from="0 -60" to="0 0" dur="0.6s" begin="0.8s" fill="freeze" />
                                            <animate attributeName="opacity" from="0" to="1" dur="0.6s" begin="0.8s" fill="freeze" />
                                            <ellipse cx="100" cy="120" rx="30" ry="12" fill="url(#goldSide)" />
                                            <ellipse cx="100" cy="115" rx="30" ry="12" fill="url(#goldSurface)" />
                                        </g>
                                        <!-- Coin 1 (Top) -->
                                        <g transform="translate(0, -60)" opacity="0">
                                            <animateTransform attributeName="transform" type="translate" from="0 -60" to="0 0" dur="0.6s" begin="1.1s" fill="freeze" />
                                            <animate attributeName="opacity" from="0" to="1" dur="0.6s" begin="1.1s" fill="freeze" />
                                            <ellipse cx="100" cy="110" rx="30" ry="12" fill="url(#goldSide)" />
                                            <ellipse cx="100" cy="105" rx="30" ry="12" fill="url(#goldSurface)" />
                                        </g>
                                    </g>
                                    
                                    <!-- Tenant + Checkmark on top -->
                                    <g id="tenant-check-group" opacity="0">
                                        <animate attributeName="opacity" from="0" to="1" dur="0.8s" begin="1.8s" fill="freeze"/>
                                        <!-- Person Icon with final proportions -->
                                        <circle cx="90" cy="86" r="6" fill="url(#managementGradient)" />
                                        <path d="M79 102 C 79 92, 101 92, 101 102 Z" fill="url(#managementGradient)" />
                                        <!-- Checkmark -->
                                        <path d="M105 80 l 5 5 l 10 -10" stroke="url(#managementGradient)" stroke-width="3" stroke-linecap="round" fill="none" style="stroke-dasharray: 50;">
                                            <animate attributeName="stroke-dashoffset" from="50" to="0" dur="0.8s" begin="2.2s" fill="freeze" />
                                        </path>
                                    </g>
                                </g>

                                <!-- Ledger Lines at the bottom -->
                                <g id="ledger-lines" opacity="0">
                                    <animate attributeName="opacity" from="0" to="0.6" dur="1.5s" begin="0.8s" fill="freeze" />
                                    <path d="M40 150 H 160 M 40 160 H 160" stroke="#6b7280" stroke-width="2" stroke-linecap="round">
                                         <animate attributeName="stroke-dashoffset" from="120" to="0" dur="2s" begin="0.8s" fill="freeze" style="stroke-dasharray: 120;"/>
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section id="fitur" class="py-16 sm:py-24 bg-gray-800">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-base font-semibold text-teal-400 tracking-wider uppercase">Best Features</h2>
                        <p class="mt-2 text-3xl font-extrabold text-white tracking-tight sm:text-4xl">Didesain untuk Mempermudah Anda</p>
                        <p class="mt-5 max-w-prose mx-auto text-xl text-gray-400">Kelola semua aspek properti kost Anda dari satu tempat yang nyaman dan terintegrasi.</p>
                    </div>
                    <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Feature 1 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-900 rounded-lg px-6 pb-8 shadow-md hover:shadow-teal-400/20 hover:-translate-y-2 transition-all duration-300">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-teal-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-bold text-white tracking-tight">Data Penyewa</h3>
                                    <p class="mt-5 text-base text-gray-400">Manajemen data penyewa terpusat, lengkap dengan riwayat sewa dan informasi kontak.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Feature 2 -->
                         <div class="pt-6">
                            <div class="flow-root bg-gray-900 rounded-lg px-6 pb-8 shadow-md hover:shadow-teal-400/20 hover:-translate-y-2 transition-all duration-300">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-teal-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-bold text-white tracking-tight">Status Kamar</h3>
                                    <p class="mt-5 text-base text-gray-400">Pantau ketersediaan kamar, kelola harga, dan catat fasilitas secara real-time.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-900 rounded-lg px-6 pb-8 shadow-md hover:shadow-teal-400/20 hover:-translate-y-2 transition-all duration-300">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-teal-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01M12 6v-1.01M12 18v-1.01M14.599 15.001A3.001 3.001 0 0012 16a3.001 3.001 0 00-2.599-1" /></svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-bold text-white tracking-tight">Keuangan & Tagihan</h3>
                                    <p class="mt-5 text-base text-gray-400">Buat tagihan otomatis dan lacak status pembayaran dari setiap penyewa dengan mudah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- How it Works Section -->
            <section class="bg-gray-900 py-16 sm:py-24">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-base font-semibold text-teal-400 tracking-wider uppercase">3 Step a Go</h2>
                        <p class="mt-2 text-3xl font-extrabold text-white tracking-tight sm:text-4xl">Hanya 3 Langkah Mudah</p>
                    </div>
                    <div class="relative">
                        <!-- Connector line -->
                        <div class="hidden md:block absolute top-1/2 -translate-y-1/2 left-0 w-full h-0.5 bg-gray-700"></div>
                        <div class="grid md:grid-cols-3 gap-12 relative">
                            <!-- Step 1 -->
                            <div class="text-center">
                                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-gray-800 border-2 border-teal-400 rounded-full text-2xl font-bold text-teal-400">1</div>
                                <h3 class="mt-6 text-xl font-bold text-white">Daftar & Setup</h3>
                                <p class="mt-2 text-gray-400">Buat akun Anda dalam sekejap dan atur detail properti kost Anda.</p>
                            </div>
                            <!-- Step 2 -->
                             <div class="text-center">
                                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-gray-800 border-2 border-teal-400 rounded-full text-2xl font-bold text-teal-400">2</div>
                                <h3 class="mt-6 text-xl font-bold text-white">Kelola Data</h3>
                                <p class="mt-2 text-gray-400">Masukkan data kamar, penyewa, dan mulai catat transaksi sewa.</p>
                            </div>
                            <!-- Step 3 -->
                             <div class="text-center">
                                <div class="flex items-center justify-center w-16 h-16 mx-auto bg-gray-800 border-2 border-teal-400 rounded-full text-2xl font-bold text-teal-400">3</div>
                                <h3 class="mt-6 text-xl font-bold text-white">Pantau & Lapor</h3>
                                <p class="mt-2 text-gray-400">Nikmati kemudahan memantau status dan melihat laporan keuangan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="bg-gray-800">
                <div class="container mx-auto py-16 px-4 sm:py-20 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        <span class="block">Siap Meningkatkan Bisnis Kost Anda?</span>
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-gray-400">Segera buat akun gratis. Jalankan, dan kelola sendiri keuanganmu.</p>
                    <a href="{{ route('register') }}" class="mt-8 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-lg text-base font-bold text-gray-900 bg-teal-400 hover:bg-teal-500 transform hover:-translate-y-1 transition-all sm:w-auto">
                        Daftar Sekarang
                    </a>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-black">
            <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-base text-gray-500">
                    &copy; {{ date('Y') }} Kost Manager. Hak Cipta Dilindungi.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>