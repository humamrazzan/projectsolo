<x-app-layout>
    <div>
        <h3 class="text-3xl font-bold text-white">Tambah Kamar Baru</h3>
        <div class="text-sm text-gray-400">Home / Kamar / Tambah</div>
    </div>

    <div class="mt-6 bg-gray-800/50 p-6 rounded-lg border border-gray-700">
        <form action="#" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nomor Kamar -->
                <div>
                    <label for="nomor_kamar" class="block text-sm font-medium text-gray-300">Nomor Kamar</label>
                    <input type="text" name="nomor_kamar" id="nomor_kamar" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" placeholder="Contoh: 101, 20A" required>
                </div>

                <!-- Harga per Bulan -->
                <div>
                    <label for="harga_per_bulan" class="block text-sm font-medium text-gray-300">Harga per Bulan (Rp)</label>
                    <input type="number" name="harga_per_bulan" id="harga_per_bulan" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" placeholder="Contoh: 1500000" required>
                </div>

                <!-- Fasilitas -->
                <div class="md:col-span-2">
                    <label for="fasilitas" class="block text-sm font-medium text-gray-300">Fasilitas</label>
                    <textarea name="fasilitas" id="fasilitas" rows="3" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" placeholder="Contoh: AC, Wi-Fi, Kamar Mandi Dalam"></textarea>
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-300">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
                        <option value="Tersedia">Tersedia</option>
                        <option value="Terisi">Terisi</option>
                        <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                    </select>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('kamar.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-gray-700 focus:outline-none focus:border-gray-700 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 active:bg-teal-700 focus:outline-none focus:border-teal-700 focus:ring ring-teal-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
