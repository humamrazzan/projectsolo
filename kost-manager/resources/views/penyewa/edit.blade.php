<x-app-layout>
    <div class="space-y-6">
        <!-- Header -->
        <div>
            <h3 class="text-3xl font-bold text-gray-800 dark:text-white">Edit Data Penyewa</h3>
            <div class="text-sm text-gray-500 dark:text-gray-400">Home / Penyewa / Edit</div>
        </div>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white dark:bg-gray-800/50 p-6 rounded-lg border border-gray-200 dark:border-gray-700">
            <form action="{{ route('penyewa.update', $penyewa) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-input-label for="nama" :value="__('Nama Lengkap')" />
                        <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $penyewa->nama)" required />
                    </div>
                    <div>
                        <x-input-label for="nama_panggilan" :value="__('Nama Panggilan')" />
                        <x-text-input id="nama_panggilan" name="nama_panggilan" type="text" class="mt-1 block w-full" :value="old('nama_panggilan', $penyewa->nama_panggilan)" required />
                    </div>
                    <div>
                        <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                        <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="mt-1 block w-full" :value="old('tanggal_lahir', $penyewa->tanggal_lahir)" />
                    </div>
                    <div>
                        <x-input-label for="status_perkawinan" :value="__('Status Perkawinan')" />
                        <select id="status_perkawinan" name="status_perkawinan" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <option value="">-- Pilih Status --</option>
                            <option value="belum kawin" {{ old('status_perkawinan', $penyewa->status_perkawinan) == 'belum kawin' ? 'selected' : '' }}>Belum Kawin</option>
                            <option value="kawin" {{ old('status_perkawinan', $penyewa->status_perkawinan) == 'kawin' ? 'selected' : '' }}>Kawin</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <x-input-label for="pekerjaan" :value="__('Pekerjaan')" />
                        <x-text-input id="pekerjaan" name="pekerjaan" type="text" class="mt-1 block w-full" :value="old('pekerjaan', $penyewa->pekerjaan)" />
                    </div>
                    <div class="md:col-span-2">
                        <x-input-label for="no_hp" :value="__('Nomor HP')" />
                        <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full" :value="old('no_hp', $penyewa->no_hp)" required />
                    </div>
                    <div>
                        <x-input-label for="kamar_id" :value="__('Pilih Kamar')" />
                        <select id="kamar_id" name="kamar_id" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                            @foreach ($kamars as $kamar)
                                <option value="{{ $kamar->id }}" {{ (old('kamar_id', $penyewa->kamar_id) == $kamar->id) ? 'selected' : '' }} @if($kamar->status == 'terisi' && $kamar->id != $penyewa->kamar_id) disabled @endif>
                                    {{ $kamar->nomor_kamar }} (Rp {{ number_format($kamar->harga, 0, ',', '.') }})
                                    @if($kamar->status == 'terisi' && $kamar->id != $penyewa->kamar_id) (Terisi) @endif
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <x-input-label for="status" :value="__('Status Sewa')" />
                        <select id="status" name="status" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                            <option value="aktif" {{ old('status', $penyewa->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="selesai" {{ old('status', $penyewa->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <x-input-label for="tanggal_sewa" :value="__('Tanggal Sewa')" />
                        <x-text-input id="tanggal_sewa" name="tanggal_sewa" type="date" class="mt-1 block w-full" :value="old('tanggal_sewa', $penyewa->tanggal_sewa)" required />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6">
                    <a href="{{ route('penyewa.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mr-4">Batal</a>
                    <x-primary-button>
                        {{ __('Simpan Perubahan') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
