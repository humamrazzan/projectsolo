<x-app-layout>
    <div>
        <h3 class="text-3xl font-bold text-white">Tambah Penyewa Baru</h3>
        <div class="text-sm text-gray-400">Home / Penyewa / Tambah</div>
    </div>

    <div class="mt-6 bg-gray-800/50 p-6 rounded-lg border border-gray-700">
        <form action="#" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nama Lengkap -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-300">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                </div>

                <!-- Nomor Telepon -->
                <div>
                    <label for="no_hp" class="block text-sm font-medium text-gray-300">Nomor Telepon</label>
                    <input type="text" name="no_hp" id="no_hp" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
                </div>
                
                <!-- Nomor Kamar -->
                <div>
                    <label for="kamar_id" class="block text-sm font-medium text-gray-300">Nomor Kamar</label>
                    <select name="kamar_id" id="kamar_id" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
                        <option value="">Pilih Kamar</option>
                        {{-- Contoh data kamar, nanti akan dinamis --}}
                        <option value="1">101</option>
                        <option value="2">102</option>
                        <option value="3">201 (Sudah Terisi)</option>
                    </select>
                </div>

                <!-- Tanggal Masuk -->
                <div>
                    <label for="tanggal_masuk" class="block text-sm font-medium text-gray-300">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
                </div>

                <!-- Tanggal Keluar -->
                <div>
                    <label for="tanggal_keluar" class="block text-sm font-medium text-gray-300">Tanggal Keluar (Opsional)</label>
                    <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="mt-1 block w-full bg-gray-700 border-gray-600 text-white rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('penyewa.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-gray-700 focus:outline-none focus:border-gray-700 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 active:bg-teal-700 focus:outline-none focus:border-teal-700 focus:ring ring-teal-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
