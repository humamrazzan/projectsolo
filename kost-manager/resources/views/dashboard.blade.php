<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <h3 class="text-3xl font-bold text-white">Dashboard</h3>
        <div class="text-sm text-gray-400">Home / Dashboard</div>

        <!-- Metric Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            <!-- Card 1: Penyewa Aktif -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-gray-700">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-400">Penyewa Aktif</p>
                        <p class="text-3xl font-bold text-white mt-2">15</p>
                    </div>
                    <div class="bg-teal-500/20 text-teal-400 p-3 rounded-full">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Card 2: Kamar Tersedia -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-gray-700">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-400">Kamar Tersedia</p>
                        <p class="text-3xl font-bold text-white mt-2">5</p>
                    </div>
                    <div class="bg-sky-500/20 text-sky-400 p-3 rounded-full">
                         <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Card 3: Pendapatan Bulan Ini -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-gray-700">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-400">Pendapatan (Bulan)</p>
                        <p class="text-3xl font-bold text-white mt-2">Rp 7.5jt</p>
                    </div>
                     <div class="bg-green-500/20 text-green-400 p-3 rounded-full">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01M12 6v-1m0-1V4m0 2.01v.01M12 21v-1m0 1v.01M12 20v-1m0-1v-1m-4-2.585a4.962 4.962 0 01-1.292-.749m1.292.749a4.962 4.962 0 00-1.292.749m-1.292-.749a4.962 4.962 0 00-1.292-.749m1.292.749a4.962 4.962 0 011.292-.749" />
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Card 4: Total Kamar -->
            <div class="bg-gray-800/50 p-6 rounded-lg border border-gray-700">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-400">Total Kamar</p>
                        <p class="text-3xl font-bold text-white mt-2">20</p>
                    </div>
                    <div class="bg-indigo-500/20 text-indigo-400 p-3 rounded-full">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="mt-8 bg-gray-800/50 p-6 rounded-lg border border-gray-700">
            <h4 class="text-xl font-bold text-white">Grafik Pendapatan (6 Bulan Terakhir)</h4>
            <div class="mt-4">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>
    </div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('revenueChart').getContext('2d');
        
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(45, 212, 191, 0.5)');
        gradient.addColorStop(1, 'rgba(45, 212, 191, 0)');

        const revenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                datasets: [{
                    label: 'Pendapatan',
                    data: [6500000, 5900000, 8000000, 8100000, 5600000, 7500000],
                    backgroundColor: gradient,
                    borderColor: '#2dd4bf',
                    borderWidth: 2,
                    pointBackgroundColor: '#2dd4bf',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#2dd4bf',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#9ca3af',
                            callback: function(value, index, values) {
                                return 'Rp ' + (value / 1000000) + 'jt';
                            }
                        },
                        grid: {
                            color: '#4b5563'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#9ca3af'
                        },
                         grid: {
                            display: false
                        }
                    }
                }
            }
        });
    });
</script>
@endpush
</x-app-layout>
