<x-app-layout>
    <div class="space-y-6">
        <!-- Header -->
        <div>
            <h3 class="text-3xl font-bold text-gray-800 dark:text-white">Detail Penyewa</h3>
            <div class="text-sm text-gray-500 dark:text-gray-400">Home / Penyewa / Detail</div>
        </div>

        <div class="bg-white dark:bg-gray-800/50 p-6 rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Data Penyewa -->
                <div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Informasi Penyewa</h4>
                    <dl class="space-y-4">
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nama Lengkap</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->nama }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nama Panggilan</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->nama_panggilan }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nomor HP</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->no_hp }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Tanggal Lahir</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->tanggal_lahir ? \Carbon\Carbon::parse($penyewa->tanggal_lahir)->format('d M Y') : '-' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Status Perkawinan</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->status_perkawinan ? ucfirst($penyewa->status_perkawinan) : '-' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Pekerjaan</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->pekerjaan ?: '-' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Status Sewa</dt>
                            <dd class="mt-1 text-sm">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $penyewa->status == 'aktif' ? 'bg-green-500/30 text-green-400' : 'bg-red-500/30 text-red-400' }}">
                                    {{ ucfirst($penyewa->status) }}
                                </span>
                            </dd>
                        </div>
                         <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Tanggal Sewa</dt>
                            <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($penyewa->tanggal_sewa)->format('d M Y') }}</dd>
                        </div>
                    </dl>
                </div>
                <!-- Data Kamar -->
                <div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Informasi Kamar</h4>
                    @if($penyewa->kamar)
                        <dl class="space-y-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nomor Kamar</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->kamar->nomor_kamar }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Harga per Bulan</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">Rp {{ number_format($penyewa->kamar->harga, 0, ',', '.') }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Keterangan Kamar</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white">{{ $penyewa->kamar->keterangan ?: '-' }}</dd>
                            </div>
                        </dl>
                    @else
                        <p class="text-gray-500 dark:text-gray-400">Penyewa ini tidak menempati kamar manapun.</p>
                    @endif
                </div>
            </div>
            <div class="flex items-center justify-end mt-6">
                <a href="{{ route('penyewa.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mr-4">Kembali</a>
                <a href="{{ route('penyewa.edit', $penyewa) }}" class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-600">Edit</a>
            </div>
        </div>
    </div>
</x-app-layout> 