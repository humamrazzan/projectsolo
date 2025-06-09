<x-app-layout>
    <div class="space-y-6">
        <!-- Header -->
        <div>
            <h3 class="text-3xl font-bold text-gray-800 dark:text-white">Edit Data Kamar</h3>
            <div class="text-sm text-gray-500 dark:text-gray-400">Home / Kamar / Edit</div>
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
            <form action="{{ route('kamar.update', $kamar) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-input-label for="nomor_kamar" :value="__('Nomor Kamar')" />
                        <x-text-input id="nomor_kamar" name="nomor_kamar" type="text" class="mt-1 block w-full" :value="old('nomor_kamar', $kamar->nomor_kamar)" required />
                    </div>
                    <div>
                        <x-input-label for="harga" :value="__('Harga per Bulan')" />
                        <x-text-input id="harga" name="harga" type="number" class="mt-1 block w-full" :value="old('harga', $kamar->harga)" required />
                    </div>
                    <div>
                        <x-input-label for="status" :value="__('Status')" />
                        <select id="status" name="status" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <option value="kosong" {{ old('status', $kamar->status) == 'kosong' ? 'selected' : '' }}>Kosong</option>
                            <option value="terisi" {{ old('status', $kamar->status) == 'terisi' ? 'selected' : '' }}>Terisi</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <x-input-label for="keterangan" :value="__('Keterangan')" />
                        <textarea id="keterangan" name="keterangan" rows="4" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('keterangan', $kamar->keterangan) }}</textarea>
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6">
                    <a href="{{ route('kamar.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mr-4">
                        Batal
                    </a>
                    <x-primary-button>
                        {{ __('Simpan Perubahan') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
