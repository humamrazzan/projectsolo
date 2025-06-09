<x-app-layout>
    <div class="space-y-6">
        <!-- Header -->
        <div>
            <h3 class="text-3xl font-bold text-gray-800 dark:text-white">Detail Kamar</h3>
            <div class="text-sm text-gray-500 dark:text-gray-400">Home / Kamar / Detail</div>
        </div>

        <div class="bg-white dark:bg-gray-800/50 p-6 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8">
                <!-- Data Kamar -->
                <div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Informasi Kamar</h4>
                    <dl class="space-y-4">
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nomor Kamar</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $kamar->nomor_kamar }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Harga per Bulan</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">Rp {{ number_format($kamar->harga, 0, ',', '.') }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Status</dt>
                            <dd class="mt-1 text-sm">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $kamar->status == 'terisi' ? 'bg-red-500/30 text-red-400' : 'bg-green-500/30 text-green-400' }}">
                                    {{ ucfirst($kamar->status) }}
                                </span>
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Keterangan</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $kamar->keterangan ?: '-' }}</dd>
                        </div>
                    </dl>
                </div>
                <!-- Data Penyewa di Kamar -->
                <div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Penyewa Saat Ini</h4>
                    @if($kamar->status == 'terisi' && $kamar->penyewas->where('status', 'aktif')->first())
                        @php
                            $penyewa = $kamar->penyewas->where('status', 'aktif')->first();
                        @endphp
                        <dl class="space-y-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nama</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->nama }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nomor HP</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->no_hp }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Tanggal Sewa</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($penyewa->tanggal_sewa)->format('d M Y') }}</dd>
                            </div>
                        </dl>
                    @else
                        <p class="text-gray-500 dark:text-gray-400">Tidak ada penyewa aktif di kamar ini.</p>
                    @endif
                </div>
            </div>

            <div class="flex items-center justify-end mt-6">
                <a href="{{ route('kamar.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mr-4">Kembali</a>
                <a href="{{ route('kamar.edit', $kamar) }}" class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-600">Edit</a>
            </div>
        </div>
    </div>
</x-app-layout> 