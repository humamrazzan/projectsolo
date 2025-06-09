<x-app-layout>
    <div class="space-y-6">
        <!-- Header -->
        <div>
            <h3 class="text-3xl font-bold text-white">Data Kamar</h3>
            <div class="text-sm text-gray-400">Home / Kamar</div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-end">
            <a href="{{ route('kamar.create') }}" class="inline-flex items-center px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 active:bg-teal-700 focus:outline-none focus:border-teal-700 focus:ring ring-teal-300 disabled:opacity-25 transition ease-in-out duration-150">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Tambah Kamar
            </a>
        </div>

        <!-- Rooms Table -->
        <div class="bg-gray-800/50 p-6 rounded-lg border border-gray-700 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            No. Kamar
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Harga per Bulan
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Fasilitas
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800/50 divide-y divide-gray-700">
                    {{-- Data statis sebagai contoh --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                            101
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500/30 text-red-400">
                                Terisi
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            Rp 1.500.000
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            AC, Kamar Mandi Dalam, Wi-Fi
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                            <a href="#" class="text-indigo-400 hover:text-indigo-600">Edit</a>
                            <a href="#" class="text-red-400 hover:text-red-600">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                            102
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500/30 text-green-400">
                                Tersedia
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            Rp 1.500.000
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            AC, Kamar Mandi Dalam, Wi-Fi
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                            <a href="#" class="text-indigo-400 hover:text-indigo-600">Edit</a>
                            <a href="#" class="text-red-400 hover:text-red-600">Hapus</a>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                            201
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                           <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500/30 text-green-400">
                                Tersedia
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            Rp 1.200.000
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            Kipas Angin, Kamar Mandi Luar
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                            <a href="#" class="text-indigo-400 hover:text-indigo-600">Edit</a>
                            <a href="#" class="text-red-400 hover:text-red-600">Hapus</a>
                        </td>
                    </tr>
                    {{-- Akhir data statis --}}
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
